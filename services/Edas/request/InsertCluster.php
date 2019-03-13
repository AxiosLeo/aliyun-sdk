<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setLogicalRegionId($LogicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setClusterName($ClusterName)
 * @method string getClusterName()
 * @method $this setClusterType($ClusterType)
 * @method integer getClusterType()
 * @method $this setNetworkMode($NetworkMode)
 * @method integer getNetworkMode()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setOversoldFactor($OversoldFactor)
 * @method integer getOversoldFactor()
 * @method $this setIaasProvider($IaasProvider)
 * @method string getIaasProvider()
 */
final class InsertCluster extends EdasCommon
{
    public $action = 'InsertCluster';
}
