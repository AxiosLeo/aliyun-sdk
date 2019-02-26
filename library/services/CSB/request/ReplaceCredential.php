<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setCredentialId($CredentialId)
 * @method integer getCredentialId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ReplaceCredential extends CSBCommon
{
    public $action = 'ReplaceCredential';
}
