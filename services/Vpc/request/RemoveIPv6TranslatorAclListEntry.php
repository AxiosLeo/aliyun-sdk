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
 * @method $this setAclEntryId($AclEntryId)
 * @method string getAclEntryId()
 */
final class RemoveIPv6TranslatorAclListEntry extends VpcCommon
{
    public $action = 'RemoveIPv6TranslatorAclListEntry';
}
