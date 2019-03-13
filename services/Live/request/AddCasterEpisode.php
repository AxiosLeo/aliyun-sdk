<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setEpisodeType($EpisodeType)
 * @method string getEpisodeType()
 * @method $this setEpisodeName($EpisodeName)
 * @method string getEpisodeName()
 * @method $this setResourceId($ResourceId)
 * @method string getResourceId()
 * @method $this setComponentId($ComponentId)
 * @method array getComponentId()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setSwitchType($SwitchType)
 * @method string getSwitchType()
 */
final class AddCasterEpisode extends LiveCommon
{
    public $action = 'AddCasterEpisode';
}
