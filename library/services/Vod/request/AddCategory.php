<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setCateName($CateName)
 * @method string getCateName()
 * @method $this setParentId($ParentId)
 * @method integer getParentId()
 */
final class AddCategory extends VodCommon
{
    public $action = 'AddCategory';
}
