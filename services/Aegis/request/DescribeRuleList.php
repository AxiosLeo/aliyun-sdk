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
 * @method $this setExGroupId($ExGroupId)
 * @method string getExGroupId()
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setWarnLevel($WarnLevel)
 * @method string getWarnLevel()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeRuleList extends AegisCommon
{
    public $action = 'DescribeRuleList';
}
