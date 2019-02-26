<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class DescribeDrdsInstance extends DrdsCommon
{
    public $action = 'DescribeDrdsInstance';
}
