<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setFileName($FileName)
 * @method string getFileName()
 * @method $this setObjectName($ObjectName)
 * @method string getObjectName()
 * @method $this setChunkIndex($ChunkIndex)
 * @method integer getChunkIndex()
 * @method $this setChunkCnt($ChunkCnt)
 * @method integer getChunkCnt()
 * @method $this setUploadId($UploadId)
 * @method string getUploadId()
 */
final class UpLoadMap extends CloudwfCommon
{
    public $action = 'UpLoadMap';
}
