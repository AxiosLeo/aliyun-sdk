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
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setMachineGroupIds($MachineGroupIds)
 * @method string getMachineGroupIds()
 * @method $this setRuleIds($RuleIds)
 * @method string getRuleIds()
 */
final class CreateOrUpdateGroup extends AegisCommon
{
    public $action = 'CreateOrUpdateGroup';
}
