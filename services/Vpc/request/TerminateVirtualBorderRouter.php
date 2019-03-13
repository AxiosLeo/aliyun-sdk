<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVbrId($VbrId)
 * @method string getVbrId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class TerminateVirtualBorderRouter extends VpcCommon
{
    public $action = 'TerminateVirtualBorderRouter';
}
