<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setUserId($UserId)
 * @method string getUserId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class ListPrivilegesOfUser extends CCCCommon
{
    public $action = 'ListPrivilegesOfUser';
}
