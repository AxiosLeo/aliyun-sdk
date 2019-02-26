<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeZones extends SlbCommon
{
    public $action = 'DescribeZones';
}
