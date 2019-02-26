<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSysFrom($SysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($Operator)
 * @method string getOperator()
 * @method $this setBoxNumber($BoxNumber)
 * @method integer getBoxNumber()
 * @method $this setServiceFlag($ServiceFlag)
 * @method boolean getServiceFlag()
 */
final class CreateEnterprise extends ITaaSCommon
{
    public $action = 'CreateEnterprise';
}
