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
 * @method $this setUserInfo($UserInfo)
 * @method array getUserInfo()
 * @method $this setPassword($Password)
 * @method string getPassword()
 */
final class CreateUserPassword extends EmrCommon
{
    public $action = 'CreateUserPassword';
}
