<?php
namespace aliyun\sdk\services\HPC;

use aliyun\sdk\core\lib\Request;

class HPCCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'hpc';

    public $version = '2016-12-13';

    public $locationServiceCode = 'hpc';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
