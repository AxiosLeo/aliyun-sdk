<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTemplateBizId($TemplateBizId)
 * @method string getTemplateBizId()
 * @method $this setUniqueTag($UniqueTag)
 * @method string getUniqueTag()
 */
final class CreateClusterWithTemplate extends EmrCommon
{
    public $action = 'CreateClusterWithTemplate';
}
