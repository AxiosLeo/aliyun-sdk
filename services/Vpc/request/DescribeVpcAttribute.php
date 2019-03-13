<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIsDefault($IsDefault)
 * @method boolean getIsDefault()
 */
final class DescribeVpcAttribute extends VpcCommon
{
    public $action = 'DescribeVpcAttribute';
}
