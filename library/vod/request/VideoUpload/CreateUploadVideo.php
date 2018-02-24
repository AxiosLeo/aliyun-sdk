<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 09:06
 */
namespace aliyun\sdk\vod\request\VideoUpload;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class Create
 * @package aliyun\sdk\vod\request\VideoUpload
 * @method $this setTitle($title)
 * @method $this setFileName($file_name)
 * @method $this setFileSize($file_size)
 * @method $this setDescription($desc)
 * @method $this setCoverURL($cover_url)
 * @method $this setCateId($cate_id)
 * @method $this setTags($tags)
 * @method $this setTemplateGroupId($template_group_id)
 */
class CreateUploadVideo extends VodCommon
{
    use Request;

    public function __construct()
    {
        $this->setActionName('CreateUploadVideo');
        parent::__construct();
    }
}