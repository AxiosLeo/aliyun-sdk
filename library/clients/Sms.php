<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/1 16:55
 */
namespace aliyun\sdk\clients;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\help\Parse;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;

class Sms extends SendSms
{
    /**
     * @var Client
     */
    protected static $SmsClient;

    protected static $sendConfig;

    protected static $instance;

    /**
     * @param $access_key_id
     * @param $access_secret
     * @return Sms
     */
    public static function factory($access_key_id = null, $access_secret = null){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        $config = [
            'accessKeyId'     => Aliyun::getAccessKeyId($access_key_id),
            'accessKeySecret' => Aliyun::getAccessSecret($access_secret),
        ];
        self::$SmsClient = new Client($config);

        return self::$instance;
    }

    public function send(){
        $response = self::$SmsClient->execute(self::$instance);
        if(is_object($response)){
            $response = Parse::objectToArray($response);
        }
        return $response;
    }
}