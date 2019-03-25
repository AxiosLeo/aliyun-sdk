<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setAclId($AclId)
 * @method string getAclId()
 * @method $this setAclName($AclName)
 * @method string getAclName()
 */
final class ModifyIPv6TranslatorAclAttribute extends VpcCommon
{
    public $action = 'ModifyIPv6TranslatorAclAttribute';
}
