<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setEpisodeId($EpisodeId)
 * @method string getEpisodeId()
 * @method $this setEpisodeType($EpisodeType)
 * @method string getEpisodeType()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setStatus($Status)
 * @method integer getStatus()
 */
final class DescribeCasterProgram extends LiveCommon
{
    public $action = 'DescribeCasterProgram';
}
