<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setChannelId($ChannelId)
 * @method string getChannelId()
 * @method $this setResourceId($ResourceId)
 * @method string getResourceId()
 * @method $this setSeekOffset($SeekOffset)
 * @method integer getSeekOffset()
 * @method $this setPlayStatus($PlayStatus)
 * @method integer getPlayStatus()
 */
final class SetCasterChannel extends LiveCommon
{
    public $action = 'SetCasterChannel';
}
