<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAcceptLanguage($AcceptLanguage)
 * @method string getAcceptLanguage()
 */
final class DescribeZones extends RKvstoreCommon
{
    public $action = 'DescribeZones';
}
