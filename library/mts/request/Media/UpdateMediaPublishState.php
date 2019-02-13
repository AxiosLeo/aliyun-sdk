<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 12:50
 */

namespace aliyun\sdk\mts\request\Media;

use aliyun\sdk\core\traits\param\MediaIdParamTrait;
use aliyun\sdk\core\traits\param\PublishParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class UpdateMediaPublishState.
 */
class UpdateMediaPublishState extends MtsCommon
{
    use Request;
    use MediaIdParamTrait;
    use PublishParamTrait;
}
