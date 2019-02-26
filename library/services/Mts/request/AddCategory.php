<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCateName($CateName)
 * @method string getCateName()
 * @method $this setParentId($ParentId)
 * @method integer getParentId()
 */
final class AddCategory extends MtsCommon
{
    public $action = 'AddCategory';
}
