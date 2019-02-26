<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAgsid($Agsid)
 * @method integer getAgsid()
 * @method $this setIdtype($Idtype)
 * @method integer getIdtype()
 * @method $this setTag($Tag)
 * @method string getTag()
 * @method $this setBeginDate($BeginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($EndDate)
 * @method string getEndDate()
 * @method $this setAreaNumber($AreaNumber)
 * @method integer getAreaNumber()
 * @method $this setAppType($AppType)
 * @method integer getAppType()
 */
final class ProfileTag extends CloudwfCommon
{
    public $action = 'ProfileTag';
}
