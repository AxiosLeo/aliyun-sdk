<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setTargetUserId($TargetUserId)
 * @method string getTargetUserId()
 * @method $this setAppIds($AppIds)
 * @method string getAppIds()
 */
final class AuthorizeApplication extends EdasCommon
{
    public $action = 'AuthorizeApplication';
}
