<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setConsumerAppId($ConsumerAppId)
 * @method string getConsumerAppId()
 * @method $this setGranularity($Granularity)
 * @method string getGranularity()
 * @method $this setMethodName($MethodName)
 * @method string getMethodName()
 * @method $this setRuleType($RuleType)
 * @method string getRuleType()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setStrategy($Strategy)
 * @method string getStrategy()
 * @method $this setThreshold($Threshold)
 * @method integer getThreshold()
 * @method $this setUrlVar($UrlVar)
 * @method string getUrlVar()
 */
final class InsertFlowControl extends EdasCommon
{
    public $action = 'InsertFlowControl';
}
