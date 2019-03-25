<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAclId($AclId)
 * @method string getAclId()
 * @method $this setAclEntryId($AclEntryId)
 * @method string getAclEntryId()
 * @method $this setAclEntryComment($AclEntryComment)
 * @method string getAclEntryComment()
 */
final class ModifyIPv6TranslatorAclListEntry extends VpcCommon
{
    public $action = 'ModifyIPv6TranslatorAclListEntry';
}
