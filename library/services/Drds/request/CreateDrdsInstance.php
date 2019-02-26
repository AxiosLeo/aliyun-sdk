<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setQuantity($Quantity)
 * @method integer getQuantity()
 * @method $this setSpecification($Specification)
 * @method string getSpecification()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVswitchId($VswitchId)
 * @method string getVswitchId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class CreateDrdsInstance extends DrdsCommon
{
    public $action = 'CreateDrdsInstance';
}
