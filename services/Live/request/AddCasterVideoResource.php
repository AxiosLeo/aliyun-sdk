<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setResourceName($ResourceName)
 * @method string getResourceName()
 * @method $this setLocationId($LocationId)
 * @method string getLocationId()
 * @method $this setLiveStreamUrl($LiveStreamUrl)
 * @method string getLiveStreamUrl()
 * @method $this setMaterialId($MaterialId)
 * @method string getMaterialId()
 * @method $this setVodUrl($VodUrl)
 * @method string getVodUrl()
 * @method $this setBeginOffset($BeginOffset)
 * @method integer getBeginOffset()
 * @method $this setEndOffset($EndOffset)
 * @method integer getEndOffset()
 * @method $this setRepeatNum($RepeatNum)
 * @method integer getRepeatNum()
 * @method $this setPtsCallbackInterval($PtsCallbackInterval)
 * @method integer getPtsCallbackInterval()
 */
final class AddCasterVideoResource extends LiveCommon
{
    public $action = 'AddCasterVideoResource';
}
