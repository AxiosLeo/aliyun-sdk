<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setId($Id)
 * @method integer getId()
 */
final class DeleteRuleGroup extends AegisCommon
{
    public $action = 'DeleteRuleGroup';
}
