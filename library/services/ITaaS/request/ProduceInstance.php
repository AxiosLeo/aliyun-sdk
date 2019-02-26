<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTraceId($TraceId)
 * @method string getTraceId()
 * @method $this setProduceParameter($ProduceParameter)
 * @method string getProduceParameter()
 */
final class ProduceInstance extends ITaaSCommon
{
    public $action = 'ProduceInstance';
}
