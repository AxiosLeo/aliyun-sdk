<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setAcceptLanguage($AcceptLanguage)
 * @method string getAcceptLanguage()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 */
final class DescribeRegions extends SlbCommon
{
    public $action = 'DescribeRegions';
}
