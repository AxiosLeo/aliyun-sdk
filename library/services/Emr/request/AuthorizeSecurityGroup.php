<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setBizType($BizType)
 * @method string getBizType()
 * @method $this setBizContent($BizContent)
 * @method string getBizContent()
 */
final class AuthorizeSecurityGroup extends EmrCommon
{
    public $action = 'AuthorizeSecurityGroup';
}
