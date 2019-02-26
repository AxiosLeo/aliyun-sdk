<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSid($Sid)
 * @method integer getSid()
 * @method $this setState($State)
 * @method integer getState()
 * @method $this setFilterstate($Filterstate)
 * @method integer getFilterstate()
 * @method $this setMaxstoptime($Maxstoptime)
 * @method integer getMaxstoptime()
 * @method $this setMinstoptime($Minstoptime)
 * @method integer getMinstoptime()
 * @method $this setClerk($Clerk)
 * @method integer getClerk()
 * @method $this setFilterclose($Filterclose)
 * @method integer getFilterclose()
 * @method $this setCrowdfixed($Crowdfixed)
 * @method integer getCrowdfixed()
 * @method $this setHoliday($Holiday)
 * @method string getHoliday()
 * @method $this setHnum($Hnum)
 * @method string getHnum()
 * @method $this setWorkday($Workday)
 * @method string getWorkday()
 * @method $this setWnum($Wnum)
 * @method string getWnum()
 */
final class ShopSetredress extends CloudwfCommon
{
    public $action = 'ShopSetredress';
}
