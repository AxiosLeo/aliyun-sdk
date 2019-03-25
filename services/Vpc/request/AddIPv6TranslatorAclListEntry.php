<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAclId($AclId)
 * @method string getAclId()
 * @method $this setAclEntryIp($AclEntryIp)
 * @method string getAclEntryIp()
 * @method $this setAclEntryComment($AclEntryComment)
 * @method string getAclEntryComment()
 */
final class AddIPv6TranslatorAclListEntry extends VpcCommon
{
    public $action = 'AddIPv6TranslatorAclListEntry';
}
