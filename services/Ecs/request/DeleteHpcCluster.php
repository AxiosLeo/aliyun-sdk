<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setHpcClusterId($HpcClusterId)
 * @method string getHpcClusterId()
 */
final class DeleteHpcCluster extends EcsCommon
{
    public $action = 'DeleteHpcCluster';
}
