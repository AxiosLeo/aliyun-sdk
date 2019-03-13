<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setTaskDetailNo($TaskDetailNo)
 * @method array getTaskDetailNo()
 */
final class AcknowledgeTaskResult extends DomainIntlCommon
{
    public $action = 'AcknowledgeTaskResult';
}
