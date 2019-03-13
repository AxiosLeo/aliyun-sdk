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
 * @method $this setStageName($StageName)
 * @method string getStageName()
 * @method $this setApiId($ApiId)
 * @method string getApiId()
 * @method $this setApiName($ApiName)
 * @method string getApiName()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method string getPageNumber()
 */
final class DescribeHistoryApis extends CloudAPICommon
{
    public $action = 'DescribeHistoryApis';
}
