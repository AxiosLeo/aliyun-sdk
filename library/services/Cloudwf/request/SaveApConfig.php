<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setEchoInt($EchoInt)
 * @method integer getEchoInt()
 * @method $this setCountry($Country)
 * @method string getCountry()
 * @method $this setDai($Dai)
 * @method string getDai()
 * @method $this setLogIp($LogIp)
 * @method string getLogIp()
 * @method $this setLogLevel($LogLevel)
 * @method integer getLogLevel()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setApAssetId($ApAssetId)
 * @method integer getApAssetId()
 * @method $this setMac($Mac)
 * @method string getMac()
 * @method $this setScan($Scan)
 * @method integer getScan()
 */
final class SaveApConfig extends CloudwfCommon
{
    public $action = 'SaveApConfig';
}
