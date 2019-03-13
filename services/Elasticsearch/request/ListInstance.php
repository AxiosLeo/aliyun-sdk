<?php
namespace aliyun\sdk\services\Elasticsearch\request;

use aliyun\sdk\services\Elasticsearch\ElasticsearchCommon;

/**
 * @method $this setpage($page)
 * @method integer getpage()
 * @method $this setsize($size)
 * @method integer getsize()
 * @method $this setdescription($description)
 * @method string getdescription()
 * @method $this setinstanceId($instanceId)
 * @method string getinstanceId()
 * @method $this setesVersion($esVersion)
 * @method string getesVersion()
 */
final class ListInstance extends ElasticsearchCommon
{
    public $action = 'ListInstance';
}
