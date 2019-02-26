<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setBeginTime($BeginTime)
 * @method integer getBeginTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPictureType($PictureType)
 * @method integer getPictureType()
 * @method $this setPictureSource($PictureSource)
 * @method integer getPictureSource()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class QueryPictureFiles extends IotCommon
{
    public $action = 'QueryPictureFiles';
}
