<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setTag($Tag)
 * @method string getTag()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setEventName($EventName)
 * @method string getEventName()
 * @method $this setLevel($Level)
 * @method string getLevel()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setStatusList($StatusList)
 * @method string getStatusList()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeWebLockEvents extends AegisCommon
{
    public $action = 'DescribeWebLockEvents';
}
