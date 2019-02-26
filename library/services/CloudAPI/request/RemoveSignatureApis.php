<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSignatureId($SignatureId)
 * @method string getSignatureId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setApiIds($ApiIds)
 * @method string getApiIds()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 */
final class RemoveSignatureApis extends CloudAPICommon
{
    public $action = 'RemoveSignatureApis';
}
