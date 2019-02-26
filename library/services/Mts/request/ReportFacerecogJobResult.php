<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setJobId($JobId)
 * @method string getJobId()
 * @method $this setFacerecog($Facerecog)
 * @method string getFacerecog()
 * @method $this setDetails($Details)
 * @method string getDetails()
 */
final class ReportFacerecogJobResult extends MtsCommon
{
    public $action = 'ReportFacerecogJobResult';
}
