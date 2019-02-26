<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setSceneId($SceneId)
 * @method string getSceneId()
 * @method $this setLayoutId($LayoutId)
 * @method string getLayoutId()
 * @method $this setComponentId($ComponentId)
 * @method array getComponentId()
 */
final class SetCasterSceneConfig extends LiveCommon
{
    public $action = 'SetCasterSceneConfig';
}
