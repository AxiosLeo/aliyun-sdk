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
 * @method $this setFollowEnable($FollowEnable)
 * @method integer getFollowEnable()
 * @method $this setAudioLayer($AudioLayer)
 * @method array getAudioLayer()
 * @method $this setMixList($MixList)
 * @method array getMixList()
 */
final class UpdateCasterSceneAudio extends LiveCommon
{
    public $action = 'UpdateCasterSceneAudio';
}
