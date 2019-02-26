<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setStart($Start)
 * @method integer getStart()
 * @method $this setEnd($End)
 * @method integer getEnd()
 * @method $this setMetric($Metric)
 * @method string getMetric()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setAggregator($Aggregator)
 * @method string getAggregator()
 * @method $this setInterval($Interval)
 * @method string getInterval()
 */
final class QueryMonitorInfo extends EdasCommon
{
    public $action = 'QueryMonitorInfo';
}
