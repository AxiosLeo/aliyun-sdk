<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setEpisode($Episode)
 * @method array getEpisode()
 */
final class ModifyCasterProgram extends LiveCommon
{
    public $action = 'ModifyCasterProgram';
}
