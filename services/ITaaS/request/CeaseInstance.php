<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTraceId($TraceId)
 * @method string getTraceId()
 * @method $this setSpMsg($SpMsg)
 * @method string getSpMsg()
 */
final class CeaseInstance extends ITaaSCommon
{
    public $action = 'CeaseInstance';
}
