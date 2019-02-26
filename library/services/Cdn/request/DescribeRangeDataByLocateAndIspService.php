<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainNames($DomainNames)
 * @method string getDomainNames()
 * @method $this setLocationNames($LocationNames)
 * @method string getLocationNames()
 * @method $this setIspNames($IspNames)
 * @method string getIspNames()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class DescribeRangeDataByLocateAndIspService extends CdnCommon
{
    public $action = 'DescribeRangeDataByLocateAndIspService';
}
