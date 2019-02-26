<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setTarget($Target)
 * @method string getTarget()
 * @method $this setTypes($Types)
 * @method string getTypes()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setConfig($Config)
 * @method string getConfig()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeMachineConfig extends AegisCommon
{
    public $action = 'DescribeMachineConfig';
}
