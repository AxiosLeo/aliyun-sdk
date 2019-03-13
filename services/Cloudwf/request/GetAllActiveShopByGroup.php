<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBid($Bid)
 * @method integer getBid()
 * @method $this setGids($Gids)
 * @method array getGids()
 */
final class GetAllActiveShopByGroup extends CloudwfCommon
{
    public $action = 'GetAllActiveShopByGroup';
}
