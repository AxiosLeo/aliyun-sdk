<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 14:34
 */

namespace aliyun\sdk\ecs\request;

use aliyun\sdk\core\http\Request;

/**
 * Class EcsCommon.
 */
class EcsCommon extends Request
{
    public function __construct()
    {
        $this->product = 'ecs';

        $this->domain = 'ecs.aliyuncs.com';

        parent::__construct();

        $this->setParam('Version', '2014-05-26');

        $this->locationServiceCode = $this->product;

        $this->locationEndpointType = 'openAPI';

        $this->auth = false;
    }
}
