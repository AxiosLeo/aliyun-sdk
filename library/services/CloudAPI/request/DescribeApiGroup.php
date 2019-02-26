<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 */
final class DescribeApiGroup extends CloudAPICommon
{
    public $action = 'DescribeApiGroup';
}
