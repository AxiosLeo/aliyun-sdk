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
 * @method $this setBeginMonth($BeginMonth)
 * @method string getBeginMonth()
 * @method $this setEndMonth($EndMonth)
 * @method string getEndMonth()
 */
final class ProfileHistory extends CloudwfCommon
{
    public $action = 'ProfileHistory';
}
