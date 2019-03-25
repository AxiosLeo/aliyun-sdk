<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setInternet($Internet)
 * @method boolean getInternet()
 * @method $this setIntranet($Intranet)
 * @method boolean getIntranet()
 */
final class UnbindServerlessSlb extends EdasCommon
{
    public $action = 'UnbindServerlessSlb';
}
