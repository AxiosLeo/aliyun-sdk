<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBNodeId($DBNodeId)
 * @method string getDBNodeId()
 */
final class RestartDBNode extends PolardbCommon
{
    public $action = 'RestartDBNode';
}
