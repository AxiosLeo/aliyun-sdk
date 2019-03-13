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
 * @method $this setVisibility($Visibility)
 * @method string getVisibility()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribePurchasedApis extends CloudAPICommon
{
    public $action = 'DescribePurchasedApis';
}
