<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setDomainNames($DomainNames)
 * @method string getDomainNames()
 */
final class DescribeDomainsResolution extends CloudAPICommon
{
    public $action = 'DescribeDomainsResolution';
}
