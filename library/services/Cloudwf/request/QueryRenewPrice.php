<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setApList($ApList)
 * @method array getApList()
 * @method $this setTimeCycleNum($TimeCycleNum)
 * @method integer getTimeCycleNum()
 */
final class QueryRenewPrice extends CloudwfCommon
{
    public $action = 'QueryRenewPrice';
}
