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
 * @method $this setSessionId($SessionId)
 * @method string getSessionId()
 * @method $this setMqEnable($MqEnable)
 * @method string getMqEnable()
 * @method $this setShareVersion($ShareVersion)
 * @method integer getShareVersion()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class ShareSenderRegister4Appkey extends ITaaSCommon
{
    public $action = 'ShareSenderRegister4Appkey';
}
