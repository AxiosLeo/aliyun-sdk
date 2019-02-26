<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setItem($Item)
 * @method array getItem()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setRepeatNum($RepeatNum)
 * @method integer getRepeatNum()
 * @method $this setSideOutputUrl($SideOutputUrl)
 * @method string getSideOutputUrl()
 * @method $this setCallbackUrl($CallbackUrl)
 * @method string getCallbackUrl()
 */
final class AddCasterEpisodeGroup extends LiveCommon
{
    public $action = 'AddCasterEpisodeGroup';
}
