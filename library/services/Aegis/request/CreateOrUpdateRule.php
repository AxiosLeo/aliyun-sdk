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
 * @method $this setRuleName($RuleName)
 * @method string getRuleName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setWarnLevel($WarnLevel)
 * @method string getWarnLevel()
 * @method $this setExpressions($Expressions)
 * @method string getExpressions()
 * @method $this setDataSourceId($DataSourceId)
 * @method integer getDataSourceId()
 * @method $this setRuleGroupIds($RuleGroupIds)
 * @method string getRuleGroupIds()
 */
final class CreateOrUpdateRule extends AegisCommon
{
    public $action = 'CreateOrUpdateRule';
}
