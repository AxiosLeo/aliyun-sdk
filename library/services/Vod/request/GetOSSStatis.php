<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setStartStatisTime($StartStatisTime)
 * @method string getStartStatisTime()
 * @method $this setEndStatisTime($EndStatisTime)
 * @method string getEndStatisTime()
 * @method $this setLevel($Level)
 * @method string getLevel()
 */
final class GetOSSStatis extends VodCommon
{
    public $action = 'GetOSSStatis';
}
