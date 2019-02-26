<?php
namespace aliyun\sdk\services\Jaq\request;

use aliyun\sdk\services\Jaq\JaqCommon;

/**
 * @method $this setCallerName($CallerName)
 * @method string getCallerName()
 * @method $this setSession($Session)
 * @method string getSession()
 * @method $this setToken($Token)
 * @method string getToken()
 * @method $this setSig($Sig)
 * @method string getSig()
 * @method $this setPlatform($Platform)
 * @method integer getPlatform()
 * @method $this setScene($Scene)
 * @method string getScene()
 */
final class AfsCheck extends JaqCommon
{
    public $action = 'AfsCheck';
}
