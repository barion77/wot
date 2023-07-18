<?php

namespace App\Classes\Lava;

use App\Models\Setting;

class LavaApi
{
    private string $api_url = 'https://api.lava.ru/business/';
    private string $secret_key;
    private int $shop_id;

    public function __construct()
    {
        $options = Setting::find(1);
        if (empty($options))
            abort(500);

        $this->secret_key = $options->lava_secret_key;
        $this->shop_id = $options->shop_id;
    }

    private function request($method, $data = [])
    {
        $data['shop_id'] = $this->shop_id;

        $data = json_encode($data,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);

        $signature = hash_hmac('sha256', $data, $this->secret_key);

        $ch = curl_init($this->api_url . $method);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json', 'Content-Type: application/json', 'Signature: ' . $signature]);

        $response = curl_exec($ch);
        $response = json_decode($response, true);

        curl_close($ch);

        return $response;
    }

    public function createInvoice($sum, $order_id, $success_url)
    {
        return $this->request('invoice/create', ['sum' => $sum, 'order_id' => $order_id, 'successUrl' => $success_url]);
    }

    public function checkInvoiceStatus($order_id)
    {
        return $this->request('invoice/status', ['orderId' => $order_id]);
    }
}
