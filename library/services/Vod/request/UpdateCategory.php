<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setCateName($CateName)
 * @method string getCateName()
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 */
final class UpdateCategory extends VodCommon
{
    public $action = 'UpdateCategory';
}
