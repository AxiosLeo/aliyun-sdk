<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNamespace($Namespace)
 * @method string getNamespace()
 */
final class DeleteNamespace extends CrCommon
{
    public $action = 'DeleteNamespace';
}
