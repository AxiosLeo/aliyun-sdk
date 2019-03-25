<?php
namespace aliyun\sdk\services\CloudPhoto;

use aliyun\sdk\core\lib\Request;

class CloudPhotoCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'cloudphoto';

    public $version = '2017-07-11';

    public $locationServiceCode = 'cloudphoto';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
