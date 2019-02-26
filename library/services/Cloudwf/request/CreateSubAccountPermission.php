<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUid($Uid)
 * @method integer getUid()
 * @method $this setPermissionType($PermissionType)
 * @method integer getPermissionType()
 * @method $this setPagePermission($PagePermission)
 * @method string getPagePermission()
 * @method $this setBusinessIds($BusinessIds)
 * @method array getBusinessIds()
 * @method $this setShopIds($ShopIds)
 * @method array getShopIds()
 * @method $this setShopGroupIds($ShopGroupIds)
 * @method array getShopGroupIds()
 */
final class CreateSubAccountPermission extends CloudwfCommon
{
    public $action = 'CreateSubAccountPermission';
}
