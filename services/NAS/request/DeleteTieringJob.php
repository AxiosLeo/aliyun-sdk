<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setVolume($Volume)
 * @method string getVolume()
 * @method $this setName($Name)
 * @method string getName()
 */
final class DeleteTieringJob extends NASCommon
{
    public $action = 'DeleteTieringJob';
}
