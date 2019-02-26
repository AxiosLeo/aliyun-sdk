<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBid($Bid)
 * @method integer getBid()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPer($Per)
 * @method integer getPer()
 * @method $this setGid($Gid)
 * @method integer getGid()
 * @method $this setAddress($Address)
 * @method string getAddress()
 * @method $this setDirc($Dirc)
 * @method string getDirc()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setShopStatus($ShopStatus)
 * @method integer getShopStatus()
 */
final class ShopShowList extends CloudwfCommon
{
    public $action = 'ShopShowList';
}
