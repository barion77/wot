<?php

namespace App\Classes\Zelenka;

use App\Models\Setting;

class ZelenkaApi
{
    private string $api_url = 'https://api.lzt.market/';
    private string $token;

    public function __construct()
    {
        $options = Setting::find(1);
        if (empty($options))
            abort(500);

        $this->token = $options->zelenka_token;
    }

    public function request($api_method, $request_method, $data = [])
    {
        $region = '';
        if (!empty($data['region'])) {
            $region = $data['region'];
            unset($data['region']);
        }

        $data = http_build_query($data);
        $url = $this->api_url . $api_method;

        if (strtolower($request_method) == 'get' && !empty($data))
            $url .= "?$data";

        if (!empty($region))
            $url .= "&region[]=$region";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            "Authorization: Bearer $this->token",
        ]);

        if (strtolower($request_method) == 'post') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        $response = curl_exec($ch);
        $response = json_decode($response, true);

        curl_close($ch);

        return $response;

    }

    public function getItemsList($category, $data = [])
    {
        return $this->request($category, 'GET', $data);
    }

    public function getItem($item_id)
    {
        return $this->request($item_id, 'GET');
    }
}
