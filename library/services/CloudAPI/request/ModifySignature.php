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
 * @method $this setSignatureName($SignatureName)
 * @method string getSignatureName()
 * @method $this setSignatureKey($SignatureKey)
 * @method string getSignatureKey()
 * @method $this setSignatureSecret($SignatureSecret)
 * @method string getSignatureSecret()
 */
final class ModifySignature extends CloudAPICommon
{
    public $action = 'ModifySignature';
}
