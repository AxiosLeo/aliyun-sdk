<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setWaitUri($WaitUri)
 * @method string getWaitUri()
 * @method $this setAllowPct($AllowPct)
 * @method integer getAllowPct()
 * @method $this setMaxTimeWait($MaxTimeWait)
 * @method integer getMaxTimeWait()
 * @method $this setGapTime($GapTime)
 * @method integer getGapTime()
 * @method $this setWaitUrl($WaitUrl)
 * @method string getWaitUrl()
 */
final class SetWaitingRoomConfig extends CdnCommon
{
    public $action = 'SetWaitingRoomConfig';
}
