<?php
namespace aliyun\sdk\services\Domain;

use aliyun\sdk\core\http\Request;

class DomainCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'domain';

    public $version = '2016-05-11';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
