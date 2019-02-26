<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setRecordId($RecordId)
 * @method string getRecordId()
 */
final class DescribeRecord extends LiveCommon
{
    public $action = 'DescribeRecord';
}
