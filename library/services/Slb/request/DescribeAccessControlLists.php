<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAclName($AclName)
 * @method string getAclName()
 * @method $this setAddressIPVersion($AddressIPVersion)
 * @method string getAddressIPVersion()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setTag($Tag)
 * @method array getTag()
 */
final class DescribeAccessControlLists extends SlbCommon
{
    public $action = 'DescribeAccessControlLists';
}
