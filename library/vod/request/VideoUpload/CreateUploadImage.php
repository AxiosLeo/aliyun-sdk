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
 * Class Image
 * @package aliyun\sdk\vod\request\VideoUpload
 * @method $this setImageType($image_type)
 * @method $this setImageExt($image_ext)
 * @method $this setTitle($title)
 * @method $this setTags($tags)
 */
class CreateUploadImage extends VodCommon
{
    use Request;

    public function __construct()
    {
        $this->setActionName('CreateUploadImage');
        parent::__construct();
    }
}