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

        $this->secret_key = $options->lava_secret_key;
        $this->shop_id = $options->shop_id;
    }

    public function request($method, $data = [])
    {

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

        curl_close($ch);

        return $response;
    }

    public function createInvoice($sum, $order_id, )
    {

    }
}
