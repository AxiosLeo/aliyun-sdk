<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAclId($AclId)
 * @method string getAclId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setAclName($AclName)
 * @method string getAclName()
 */
final class DescribeIPv6TranslatorAclLists extends VpcCommon
{
    public $action = 'DescribeIPv6TranslatorAclLists';
}
