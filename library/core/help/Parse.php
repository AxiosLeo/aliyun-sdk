<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2018/8/7 14:12
 */

namespace aliyun\sdk\core\help;


use api\tool\lib\ArrayToXML;

class Parse
{
    public static function xmlToArray($xml)
    {
        libxml_disable_entity_loader(true);

        return json_decode(
            \GuzzleHttp\json_encode(
                simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)
            ), true
        );
    }

    public static function arrayToXml($data, $rootNodeName = 'data')
    {
        $xml         = new ArrayToXML();
        $xml_content = $xml->buildXML($data, $rootNodeName);
        return $xml_content . "\n";
    }

    public static function jsonToArray($json)
    {
        $temp = json_decode($json, true);
        if (empty($temp) && $json != $temp) {
            return $json;
        }

        return $temp;
    }

    public static function arrayToJson($array)
    {
        if (is_array($array)) {
            $array = \GuzzleHttp\json_encode($array);
        }
        return $array;
    }

    public static function objectToArray($object)
    {
        return json_decode(\GuzzleHttp\json_encode($object), true);
    }

    public static function allToString(&$array = [])
    {
        if (is_object($array)) {
            $array = self::objectToArray($array);
        }
        if (is_array($array)) {
            foreach ($array as &$a) {
                if (is_object($a)) {
                    $a = self::objectToArray($a);
                }
                if (is_array($a)) {
                    self::allToString($a);
                }
                if (is_int($a)) {
                    $a = strval($a);
                }
                if (is_null($a)) {
                    $a = "";
                }
            }
        } else if (is_int($array)) {
            $array = strval($array);
        } else if (is_null($array)) {
            $array = "";
        }
        return $array;
    }

    public static function parseEnableParam($enable)
    {
        return in_array($enable, ["1", 1, "On", "on", "ON"]) ? "On" : "Off";
    }

    public static function boolToString($bool)
    {
        if (strtolower($bool) === "false") {
            $bool = false;
        }
        return $bool ? "True" : "False";
    }
}