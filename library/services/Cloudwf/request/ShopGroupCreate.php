<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBid($Bid)
 * @method integer getBid()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setShopIds($ShopIds)
 * @method string getShopIds()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ShopGroupCreate extends CloudwfCommon
{
    public $action = 'ShopGroupCreate';
}
