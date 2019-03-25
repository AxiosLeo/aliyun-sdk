<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setAclName($AclName)
 * @method string getAclName()
 */
final class CreateIPv6TranslatorAclList extends VpcCommon
{
    public $action = 'CreateIPv6TranslatorAclList';
}
