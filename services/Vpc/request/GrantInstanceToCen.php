<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setCenId($CenId)
 * @method string getCenId()
 * @method $this setCenOwnerId($CenOwnerId)
 * @method integer getCenOwnerId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class GrantInstanceToCen extends VpcCommon
{
    public $action = 'GrantInstanceToCen';
}
