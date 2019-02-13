<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 09:17
 */

namespace aliyun\sdk\vod\request\VideoUpload;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class CreateUploadImage.
 *
 * @method $this setImageType($image_type)
 * @method $this setImageExt($image_ext)
 * @method $this setTitle($title)
 * @method $this setTags($tags)
 */
class CreateUploadImage extends VodCommon
{
    use Request;
}
