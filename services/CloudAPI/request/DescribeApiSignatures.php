<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setApiIds($ApiIds)
 * @method string getApiIds()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeApiSignatures extends CloudAPICommon
{
    public $action = 'DescribeApiSignatures';
}
