<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setOrderId($OrderId)
 * @method integer getOrderId()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 */
final class GetOrder extends CSBCommon
{
    public $action = 'GetOrder';
}
