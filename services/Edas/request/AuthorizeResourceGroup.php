<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setTargetUserId($TargetUserId)
 * @method string getTargetUserId()
 * @method $this setResourceGroupIds($ResourceGroupIds)
 * @method string getResourceGroupIds()
 */
final class AuthorizeResourceGroup extends EdasCommon
{
    public $action = 'AuthorizeResourceGroup';
}
