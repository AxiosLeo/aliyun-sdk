<?php
namespace aliyun\sdk\services\Cloudauth\request;

use aliyun\sdk\services\Cloudauth\CloudauthCommon;

/**
 * @method $this setTargetImageType($TargetImageType)
 * @method string getTargetImageType()
 * @method $this setSourceImageType($SourceImageType)
 * @method string getSourceImageType()
 * @method $this setSourceImageValue($SourceImageValue)
 * @method string getSourceImageValue()
 * @method $this setTargetImageValue($TargetImageValue)
 * @method string getTargetImageValue()
 */
final class CompareFaces extends CloudauthCommon
{
    public $action = 'CompareFaces';
}
