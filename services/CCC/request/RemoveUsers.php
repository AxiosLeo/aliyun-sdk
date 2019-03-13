<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setUserId($UserId)
 * @method array getUserId()
 */
final class RemoveUsers extends CCCCommon
{
    public $action = 'RemoveUsers';
}
