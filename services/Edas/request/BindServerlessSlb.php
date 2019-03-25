<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setInternet($Internet)
 * @method string getInternet()
 * @method $this setIntranet($Intranet)
 * @method string getIntranet()
 */
final class BindServerlessSlb extends EdasCommon
{
    public $action = 'BindServerlessSlb';
}
