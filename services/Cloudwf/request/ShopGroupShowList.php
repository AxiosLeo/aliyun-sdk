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
 */
final class ShopGroupShowList extends CloudwfCommon
{
    public $action = 'ShopGroupShowList';
}
