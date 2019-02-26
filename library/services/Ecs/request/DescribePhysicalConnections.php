<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setFilter($Filter)
 * @method array getFilter()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setUserCidr($UserCidr)
 * @method string getUserCidr()
 */
final class DescribePhysicalConnections extends EcsCommon
{
    public $action = 'DescribePhysicalConnections';
}
