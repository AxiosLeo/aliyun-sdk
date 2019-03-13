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
 * @method $this setTS($TS)
 * @method string getTS()
 * @method $this setAccessToken($AccessToken)
 * @method string getAccessToken()
 * @method $this setCid($Cid)
 * @method string getCid()
 * @method $this setUid($Uid)
 * @method integer getUid()
 * @method $this setUmid($Umid)
 * @method string getUmid()
 * @method $this setSid($Sid)
 * @method string getSid()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class ShareSenderRegister extends ITaaSCommon
{
    public $action = 'ShareSenderRegister';
}
