<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setUuid($Uuid)
 * @method string getUuid()
 * @method $this setStatus($Status)
 * @method integer getStatus()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class QueryLoginEvent extends AegisCommon
{
    public $action = 'QueryLoginEvent';
}
