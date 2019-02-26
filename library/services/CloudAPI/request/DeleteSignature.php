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
 */
final class DeleteSignature extends CloudAPICommon
{
    public $action = 'DeleteSignature';
}
