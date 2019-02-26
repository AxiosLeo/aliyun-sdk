<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setEngine($Engine)
 * @method string getEngine()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeCharacterSetName extends RdsCommon
{
    public $action = 'DescribeCharacterSetName';
}
