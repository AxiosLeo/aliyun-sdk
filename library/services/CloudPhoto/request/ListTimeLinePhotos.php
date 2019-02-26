<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setDirection($Direction)
 * @method string getDirection()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setFilterBy($FilterBy)
 * @method string getFilterBy()
 * @method $this setOrder($Order)
 * @method string getOrder()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class ListTimeLinePhotos extends CloudPhotoCommon
{
    public $action = 'ListTimeLinePhotos';
}
