<?php
namespace aliyun\sdk\services\Elasticsearch\request;

use aliyun\sdk\services\Elasticsearch\ElasticsearchCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class UninstallPlugin extends ElasticsearchCommon
{
    public $action = 'UninstallPlugin';
}
