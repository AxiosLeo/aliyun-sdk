<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPageIndex($PageIndex)
 * @method integer getPageIndex()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setApgroupId($ApgroupId)
 * @method integer getApgroupId()
 * @method $this setSearchMac($SearchMac)
 * @method string getSearchMac()
 * @method $this setSearchName($SearchName)
 * @method string getSearchName()
 * @method $this setSearchModel($SearchModel)
 * @method string getSearchModel()
 */
final class ListApAssetCanBeAdded extends CloudwfCommon
{
    public $action = 'ListApAssetCanBeAdded';
}
