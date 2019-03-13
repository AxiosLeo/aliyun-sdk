<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setBuildPackId($BuildPackId)
 * @method integer getBuildPackId()
 */
final class UpdateContainer extends EdasCommon
{
    public $action = 'UpdateContainer';
}
