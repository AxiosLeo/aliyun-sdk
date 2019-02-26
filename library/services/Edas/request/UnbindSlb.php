<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setSlbId($SlbId)
 * @method string getSlbId()
 * @method $this setType($Type)
 * @method string getType()
 */
final class UnbindSlb extends EdasCommon
{
    public $action = 'UnbindSlb';
}
