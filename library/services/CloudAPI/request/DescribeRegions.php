<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLanguage($Language)
 * @method string getLanguage()
 */
final class DescribeRegions extends CloudAPICommon
{
    public $action = 'DescribeRegions';
}
