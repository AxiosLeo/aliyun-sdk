<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setAliasName($AliasName)
 * @method string getAliasName()
 */
final class DescribeVulDetails extends AegisCommon
{
    public $action = 'DescribeVulDetails';
}
