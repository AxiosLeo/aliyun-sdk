<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setDataId($DataId)
 * @method string getDataId()
 * @method $this setGroup($Group)
 * @method string getGroup()
 * @method $this setData($Data)
 * @method string getData()
 * @method $this setLogicalRegionId($LogicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 */
final class InsertConfigCenter extends EdasCommon
{
    public $action = 'InsertConfigCenter';
}
