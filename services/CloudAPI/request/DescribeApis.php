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
 * @method $this setApiId($ApiId)
 * @method string getApiId()
 * @method $this setApiName($ApiName)
 * @method string getApiName()
 * @method $this setCatalogId($CatalogId)
 * @method string getCatalogId()
 * @method $this setVisibility($Visibility)
 * @method string getVisibility()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeApis extends CloudAPICommon
{
    public $action = 'DescribeApis';
}
