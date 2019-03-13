<?php
namespace aliyun\sdk\services\Elasticsearch\request;

use aliyun\sdk\services\Elasticsearch\ElasticsearchCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this settype($type)
 * @method string gettype()
 * @method $this setquery($query)
 * @method string getquery()
 * @method $this setbeginTime($beginTime)
 * @method integer getbeginTime()
 * @method $this setendTime($endTime)
 * @method integer getendTime()
 * @method $this setpage($page)
 * @method integer getpage()
 * @method $this setsize($size)
 * @method integer getsize()
 */
final class ListSearchLog extends ElasticsearchCommon
{
    public $action = 'ListSearchLog';
}
