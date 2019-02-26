<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setCasterName($CasterName)
 * @method string getCasterName()
 * @method $this setSrcCasterId($SrcCasterId)
 * @method string getSrcCasterId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CopyCaster extends LiveCommon
{
    public $action = 'CopyCaster';
}
