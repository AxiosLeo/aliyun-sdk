<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setText($Text)
 * @method string getText()
 * @method $this setPattern($Pattern)
 * @method string getPattern()
 * @method $this setRepeat($Repeat)
 * @method integer getRepeat()
 * @method $this setDelay($Delay)
 * @method integer getDelay()
 */
final class AddTrancodeSEI extends LiveCommon
{
    public $action = 'AddTrancodeSEI';
}
