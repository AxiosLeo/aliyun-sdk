<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAclId($AclId)
 * @method string getAclId()
 */
final class DeleteIPv6TranslatorAclList extends VpcCommon
{
    public $action = 'DeleteIPv6TranslatorAclList';
}
