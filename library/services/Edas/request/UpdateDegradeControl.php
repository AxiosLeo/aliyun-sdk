<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setRuleId($RuleId)
 * @method string getRuleId()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setMethodName($MethodName)
 * @method string getMethodName()
 * @method $this setRtThreshold($RtThreshold)
 * @method integer getRtThreshold()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setUrlVar($UrlVar)
 * @method string getUrlVar()
 * @method $this setRuleType($RuleType)
 * @method string getRuleType()
 */
final class UpdateDegradeControl extends EdasCommon
{
    public $action = 'UpdateDegradeControl';
}
