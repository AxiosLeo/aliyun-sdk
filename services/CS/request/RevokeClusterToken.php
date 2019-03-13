<?php
namespace aliyun\sdk\services\CS\request;

use aliyun\sdk\services\CS\CSCommon;

/**
 * @method $this setToken($Token)
 * @method string getToken()
 */
final class RevokeClusterToken extends CSCommon
{
    public $action = 'RevokeClusterToken';
}
