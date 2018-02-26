<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/7 17:15
 */

namespace aliyun\sdk\core\help;


class Parse
{
    public static function xmlToArray($xml)
    {
        //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $values;
    }

    public static function parseEnableParam($enable){
        return in_array($enable,["1",1,"On","on","ON"]) ? "On":"Off";
    }
}