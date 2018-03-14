<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 10:47
 */

namespace aliyun\sdk\api;

use aliyun\sdk\api\request\Group\CreateApiGroup;
use aliyun\sdk\api\request\Group\CreateApiStageVariable;
use aliyun\sdk\api\request\Group\DeleteApiGroup;
use aliyun\sdk\api\request\Group\DeleteApiStageVariable;
use aliyun\sdk\api\request\Group\DescribeApiGroup;
use aliyun\sdk\api\request\Group\DescribeApiGroups;
use aliyun\sdk\api\request\Group\DescribeApiStage;
use aliyun\sdk\api\request\Group\ModifyApiGroup;

/**
 * Class API
 * @package aliyun\sdk\api
 */
class API
{
    /********************************** Group **************************************************/

    /**
     * 创建 API 分组
     * @param $group_name
     * @param $description
     * @return CreateApiGroup
     */
    public static function CreateApiGroup($group_name, $description){
        return (new CreateApiGroup())->setGroupName($group_name)->setDescription($description);
    }

    /**
     * 修改 API 分组
     * @param $group_id
     * @return ModifyApiGroup
     */
    public static function ModifyApiGroup($group_id){
        return (new ModifyApiGroup())->setGroupId($group_id);
    }

    /**
     * 删除 API 分组
     * @param $group_id
     * @return DeleteApiGroup
     */
    public static function DeleteApiGroup($group_id){
        return (new DeleteApiGroup())->setGroupId($group_id);
    }

    /**
     * 创建环境变量
     * @param $group_id
     * @param $stage_id
     * @param $var_name
     * @return CreateApiStageVariable
     */
    public static function CreateApiStageVariable($group_id, $stage_id, $var_name){
        return (new CreateApiStageVariable())
            ->setGroupId($group_id)
            ->setStageId($stage_id)
            ->setVariableName($var_name);
    }

    /**
     * 删除环境的指定变量
     * @param $group_id
     * @param $stage_id
     * @param $var_name
     * @return DeleteApiStageVariable
     */
    public static function DeleteApiStageVariable($group_id, $stage_id, $var_name){
        return (new DeleteApiStageVariable())
            ->setGroupId($group_id)
            ->setStageId($stage_id)
            ->setVariableName($var_name);
    }

    /**
     * 查询 API 分组详情
     * @param $group_id
     * @return DescribeApiGroup
     */
    public static function DescribeApiGroup($group_id){
        return (new DescribeApiGroup())->setGroupId($group_id);
    }

    /**
     * 查询 API 分组列表
     * @return DescribeApiGroups
     */
    public static function DescribeApiGroups(){
        return (new DescribeApiGroups());
    }

    /**
     * 查询环境详情
     * @param $group_id
     * @param $stage_id
     * @return DescribeApiStage
     */
    public static function DescribeApiStage($group_id, $stage_id){
        return (new DescribeApiStage())->setGroupId($group_id)->setStageId($stage_id);
    }
}