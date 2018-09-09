<?php

namespace App\Models;

use \Curl\Curl;

class ApiPastebin {

    const API_DEV_KEY = "ad4fb86acfeeca7841d0823ae2ff1f8e";
    const API_USER_KEY = "ad6a60b6149f7338f23daf36a854f6b3";
    const API_POST_URL = "https://pastebin.com/api/api_post.php";
    const API_RAW_URL = "https://pastebin.com/api/api_raw.php";

    private $http;
    public $apiUserKeyObject;

    /**
     * ApiPastebin constructor.
     */
    public function __construct()
    {
        $this->http = new Curl();
    }

    /**
     * @param string $api_paste_code
     * @return Curl
     */
    public function create(string $api_paste_code)
    {
        $this->http->post(self::API_POST_URL, array(
            'api_option' => 'paste',
            'api_dev_key' => self::API_DEV_KEY,
            'api_paste_code' => urlencode($api_paste_code),
        ));

       return $this->http;
    }

    /**
     * @return Curl
     */
    public function listing()
    {
        $this->http->post(self::API_POST_URL, array(
            'api_option' => 'list',
            'api_user_key' => self::API_USER_KEY,
            'api_dev_key' => self::API_DEV_KEY,
            'api_results_limit' => 100
        ));

        return $this->http;
    }

    /**
     * @param string $api_paste_code
     * @return Curl
     */
    public function destroy(string $api_paste_code)
    {
        $this->http->post(self::API_POST_URL, array(
            'api_option' => 'delete',
            'api_user_key' => self::API_USER_KEY,
            'api_dev_key' => self::API_DEV_KEY,
            'api_paste_key' => $api_paste_code
        ));

        return $this->http;
    }

    /**
     * @param string $api_paste_key
     * @return Curl
     */
    public function get(string $api_paste_key)
    {
        $this->http->post(self::API_RAW_URL, array(
            'api_option' => 'show_paste',
            'api_user_key' => self::API_USER_KEY,
            'api_dev_key' => self::API_DEV_KEY,
            'api_paste_key' => $api_paste_key
        ));

        return $this->http;
    }
}