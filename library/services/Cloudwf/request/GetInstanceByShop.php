<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setShopId($ShopId)
 * @method integer getShopId()
 */
final class GetInstanceByShop extends CloudwfCommon
{
    public $action = 'GetInstanceByShop';
}
