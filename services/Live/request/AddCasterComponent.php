<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setComponentName($ComponentName)
 * @method string getComponentName()
 * @method $this setLocationId($LocationId)
 * @method string getLocationId()
 * @method $this setComponentType($ComponentType)
 * @method string getComponentType()
 * @method $this setEffect($Effect)
 * @method string getEffect()
 * @method $this setComponentLayer($ComponentLayer)
 * @method string getComponentLayer()
 * @method $this setTextLayerContent($TextLayerContent)
 * @method string getTextLayerContent()
 * @method $this setImageLayerContent($ImageLayerContent)
 * @method string getImageLayerContent()
 * @method $this setCaptionLayerContent($CaptionLayerContent)
 * @method string getCaptionLayerContent()
 */
final class AddCasterComponent extends LiveCommon
{
    public $action = 'AddCasterComponent';
}
