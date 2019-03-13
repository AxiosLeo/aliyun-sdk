<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGsid($Gsid)
 * @method integer getGsid()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPer($Per)
 * @method integer getPer()
 * @method $this setClassType($ClassType)
 * @method integer getClassType()
 * @method $this setGsType($GsType)
 * @method string getGsType()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setBid($Bid)
 * @method integer getBid()
 */
final class GetCrowdList extends CloudwfCommon
{
    public $action = 'GetCrowdList';
}
