<?php
namespace aliyun\sdk\services\Elasticsearch\request;

use aliyun\sdk\services\Elasticsearch\ElasticsearchCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setname($name)
 * @method string getname()
 * @method $this setpage($page)
 * @method string getpage()
 * @method $this setsize($size)
 * @method integer getsize()
 * @method $this setsource($source)
 * @method string getsource()
 */
final class ListPlugins extends ElasticsearchCommon
{
    public $action = 'ListPlugins';
}
