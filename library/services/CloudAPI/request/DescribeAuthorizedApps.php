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
 * @method $this setStageName($StageName)
 * @method string getStageName()
 * @method $this setApiId($ApiId)
 * @method string getApiId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeAuthorizedApps extends CloudAPICommon
{
    public $action = 'DescribeAuthorizedApps';
}
