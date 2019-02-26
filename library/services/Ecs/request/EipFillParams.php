<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setdata($data)
 * @method string getdata()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setUserCidr($UserCidr)
 * @method string getUserCidr()
 */
final class EipFillParams extends EcsCommon
{
    public $action = 'EipFillParams';
}
