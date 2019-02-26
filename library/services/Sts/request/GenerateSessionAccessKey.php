<?php
namespace aliyun\sdk\services\Sts\request;

use aliyun\sdk\services\Sts\StsCommon;

/**
 * @method $this setDurationSeconds($DurationSeconds)
 * @method integer getDurationSeconds()
 */
final class GenerateSessionAccessKey extends StsCommon
{
    public $action = 'GenerateSessionAccessKey';
}
