<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 * @method $this setLogicalRegionId($LogicalRegionId)
 * @method string getLogicalRegionId()
 */
final class MigrateEcu extends EdasCommon
{
    public $action = 'MigrateEcu';
}
