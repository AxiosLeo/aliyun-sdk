<?php
namespace aliyun\sdk\services\DomainIntl;

use aliyun\sdk\core\lib\Request;

class DomainIntlCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'domainintl';

    public $version = '2017-12-18';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
