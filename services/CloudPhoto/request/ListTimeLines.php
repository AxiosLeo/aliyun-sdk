<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setDirection($Direction)
 * @method string getDirection()
 * @method $this setPhotoSize($PhotoSize)
 * @method integer getPhotoSize()
 * @method $this setCursor($Cursor)
 * @method integer getCursor()
 * @method $this setTimeLineCount($TimeLineCount)
 * @method integer getTimeLineCount()
 * @method $this setTimeLineUnit($TimeLineUnit)
 * @method string getTimeLineUnit()
 * @method $this setFilterBy($FilterBy)
 * @method string getFilterBy()
 * @method $this setOrder($Order)
 * @method string getOrder()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class ListTimeLines extends CloudPhotoCommon
{
    public $action = 'ListTimeLines';
}
