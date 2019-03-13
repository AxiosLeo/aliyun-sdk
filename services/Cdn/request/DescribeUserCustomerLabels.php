<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setUid($Uid)
 * @method integer getUid()
 */
final class DescribeUserCustomerLabels extends CdnCommon
{
    public $action = 'DescribeUserCustomerLabels';
}
