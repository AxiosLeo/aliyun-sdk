<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setTempName($TempName)
 * @method string getTempName()
 * @method $this setOssFileId($OssFileId)
 * @method integer getOssFileId()
 * @method $this setTextAlign($TextAlign)
 * @method string getTextAlign()
 * @method $this setTextColor($TextColor)
 * @method string getTextColor()
 * @method $this setTextContent($TextContent)
 * @method string getTextContent()
 */
final class SavePortalTemplate extends CloudwfCommon
{
    public $action = 'SavePortalTemplate';
}
