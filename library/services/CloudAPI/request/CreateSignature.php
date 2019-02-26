<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSignatureName($SignatureName)
 * @method string getSignatureName()
 * @method $this setSignatureKey($SignatureKey)
 * @method string getSignatureKey()
 * @method $this setSignatureSecret($SignatureSecret)
 * @method string getSignatureSecret()
 */
final class CreateSignature extends CloudAPICommon
{
    public $action = 'CreateSignature';
}
