<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSysFrom($SysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($Operator)
 * @method string getOperator()
 * @method $this setUuid($Uuid)
 * @method string getUuid()
 * @method $this setIpSegment($IpSegment)
 * @method string getIpSegment()
 * @method $this setMemo($Memo)
 * @method string getMemo()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class UpdateIPSegment extends ITaaSCommon
{
    public $action = 'UpdateIPSegment';
}
