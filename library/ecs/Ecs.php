<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 14:32
 */

namespace aliyun\sdk\ecs;

use aliyun\sdk\ecs\request\Instance\DescribeInstances;
use aliyun\sdk\ecs\request\Instance\RunInstances;

/**
 * Class Ecs
 * API Document : https://help.aliyun.com/document_detail/25485.html
 * @package aliyun\sdk\ecs
 */
class Ecs
{
    /********************************** Instance **************************************************/

    /**
     * @param $region_id
     * @param $image_id
     * @param $instance_type
     * @param $security_group_id
     * @return RunInstances
     */
    public static function RunInstances($region_id, $image_id, $instance_type, $security_group_id){
        return (new RunInstances())
            ->setRegionId($region_id)
            ->setImageId($image_id)
            ->setInstanceType($instance_type)
            ->setSecurityGroupId($security_group_id);
    }

    /**
     * @param $region_id
     * @return DescribeInstances
     */
    public static function DescribeInstances($region_id){
        return (new DescribeInstances())->setRegionId($region_id);
    }
}