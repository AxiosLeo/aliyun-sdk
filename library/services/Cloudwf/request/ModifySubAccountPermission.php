<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setPagePermission($PagePermission)
 * @method string getPagePermission()
 * @method $this setBusinessIds($BusinessIds)
 * @method array getBusinessIds()
 * @method $this setShopIds($ShopIds)
 * @method array getShopIds()
 * @method $this setShopGroupIds($ShopGroupIds)
 * @method array getShopGroupIds()
 */
final class ModifySubAccountPermission extends CloudwfCommon
{
    public $action = 'ModifySubAccountPermission';
}
