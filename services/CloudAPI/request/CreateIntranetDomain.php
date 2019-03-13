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
 * @method $this setDeleteInternetDomain($DeleteInternetDomain)
 * @method boolean getDeleteInternetDomain()
 */
final class CreateIntranetDomain extends CloudAPICommon
{
    public $action = 'CreateIntranetDomain';
}
