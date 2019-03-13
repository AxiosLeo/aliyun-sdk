<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setUuid($Uuid)
 * @method string getUuid()
 * @method $this setLang($Lang)
 * @method string getLang()
 */
final class DescribeAssetDetailByUuid extends AegisCommon
{
    public $action = 'DescribeAssetDetailByUuid';
}
