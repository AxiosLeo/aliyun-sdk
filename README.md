
> The set of Aliyun Cloud Service SDK ,Support for composer library.

[![Latest Stable Version](https://poser.pugx.org/axios/aliyun-sdk/v/stable)](https://packagist.org/packages/axios/aliyun-sdk)
[![License](https://poser.pugx.org/axios/aliyun-sdk/license)](https://packagist.org/packages/axios/aliyun-sdk)

> [Aliyun Cloud OSS official documentation center](https://help.aliyun.com/)

> QQ Group：521797692

## Env
- PHP 7.0+.
- CURL extension.

## Install
```shell
composer require axios/aliyun-sdk
```

## Development Plan

* OSS -> Base on aliyun/aliyun-oss-php-sdk
* SMS -> base on flc/dysms
* [other services -> generate by code generator ](https://github.com/AxiosCros/aliyun-sdk/tree/master/library/services)
* ......


## How To Use

  > [aliyun-sdk/example](https://github.com/AxiosCros/aliyun-sdk/tree/master/example)
  
* require composer autoload

```php
require_once __DIR__. "/../vendor/autoload.php";
```

* auth

```php
$access_id = "testAccessKeyId";
$access_secret = "testAccessKeySecret";

\aliyun\sdk\Aliyun::auth($access_id,$access_secret);
```

* Setting Region

```php
\aliyun\sdk\Aliyun::region('cn-shanghai');
```

* Request

```php

$response = Vod::V20170321()->GetCategories()
    ->setCateId(-1)
    ->request();
```

* Get Response Content

```php
dump($response->getContent());
```

## Customized Request

```php
use aliyun\sdk\vod\request\VodCommon;

class Example extends ProductAbstract {

     protected $product = "<ProductName>";

     protected $service_code = "<ProductServiceCode>";

     protected $credential = "<Credential>";

     protected $version = "<VersionDate>";

     public static functino client(){
          $product                = new self($version);
          self::$client[$version] = new Client();
          self::$client[$version]->init($product);
     }
}
```

``` php

$response = Example::client()->ActionName()->params($key, $value)
    ->request(CredentialsInterface $credential);

$result = $response->getContent();
```

## License
licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)