<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCollectionId($CollectionId)
 * @method integer getCollectionId()
 */
final class DeleteCollection extends CrCommon
{
    public $action = 'DeleteCollection';
}
