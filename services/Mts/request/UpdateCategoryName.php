<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCateId($CateId)
 * @method string getCateId()
 * @method $this setCateName($CateName)
 * @method string getCateName()
 */
final class UpdateCategoryName extends MtsCommon
{
    public $action = 'UpdateCategoryName';
}
