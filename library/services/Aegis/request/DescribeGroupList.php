<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setRuleGroupId($RuleGroupId)
 * @method integer getRuleGroupId()
 * @method $this setWarnLevel($WarnLevel)
 * @method string getWarnLevel()
 * @method $this setExGroupId($ExGroupId)
 * @method integer getExGroupId()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeGroupList extends AegisCommon
{
    public $action = 'DescribeGroupList';
}
