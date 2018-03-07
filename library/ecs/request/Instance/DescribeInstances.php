<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 14:42
 */

namespace aliyun\sdk\ecs\request\Instance;

use aliyun\sdk\ecs\request\EcsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeInstances
 * @package aliyun\sdk\ecs\request\Instance
 */
class DescribeInstances extends EcsCommon
{
    use Request;

    public function setRegionId($region_id){
        $this->setParam("RegionId",$region_id);
        return $this;
    }
}