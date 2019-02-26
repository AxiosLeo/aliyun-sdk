<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 * @method $this setWelcomeUri($WelcomeUri)
 * @method string getWelcomeUri()
 * @method $this setScreenCode($ScreenCode)
 * @method string getScreenCode()
 * @method $this setCid($Cid)
 * @method string getCid()
 */
final class SetWelcomePageURIToBoxByTP extends ITaaSCommon
{
    public $action = 'SetWelcomePageURIToBoxByTP';
}
