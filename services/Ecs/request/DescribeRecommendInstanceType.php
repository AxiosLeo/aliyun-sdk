<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this settoken($token)
 * @method string gettoken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setchannel($channel)
 * @method string getchannel()
 * @method $this setoperator($operator)
 * @method string getoperator()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setScene($Scene)
 * @method string getScene()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeRecommendInstanceType extends EcsCommon
{
    public $action = 'DescribeRecommendInstanceType';
}
