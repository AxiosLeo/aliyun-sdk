<?php
namespace aliyun\sdk\services\Ons\request;

use aliyun\sdk\services\Ons\OnsCommon;

/**
 * @method $this setOnsRegionId($OnsRegionId)
 * @method string getOnsRegionId()
 * @method $this setOnsPlatform($OnsPlatform)
 * @method string getOnsPlatform()
 * @method $this setPreventCache($PreventCache)
 * @method integer getPreventCache()
 * @method $this setTopic($Topic)
 * @method string getTopic()
 * @method $this setCluster($Cluster)
 * @method string getCluster()
 * @method $this setQueueNum($QueueNum)
 * @method integer getQueueNum()
 * @method $this setOrder($Order)
 * @method boolean getOrder()
 * @method $this setQps($Qps)
 * @method integer getQps()
 * @method $this setStatus($Status)
 * @method integer getStatus()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setAppkey($Appkey)
 * @method string getAppkey()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 */
final class OnsTopicCreate extends OnsCommon
{
    public $action = 'OnsTopicCreate';
}
