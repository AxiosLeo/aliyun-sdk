
> The set of Aliyun Cloud Service SDK ,Support for composer library.

[![Latest Stable Version](https://poser.pugx.org/axios/aliyun-sdk/v/stable)](https://packagist.org/packages/axios/aliyun-sdk)
[![License](https://poser.pugx.org/axios/aliyun-sdk/license)](https://packagist.org/packages/axios/aliyun-sdk)

> [Aliyun Cloud OSS official documentation center](https://help.aliyun.com/)

## Env
- PHP 7.0+.
- cURL extension.

## Install
```shell
composer require axios/aliyun-sdk
```


## Development Plan

* VOD -> Done
* CDN -> Done
* OSS -> Base on aliyun/aliyun-oss-php-sdk
* SMS -> base on flc/dysms
* MTS -> Done
* LIVE
* ......

## How To Use
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
$response = \aliyun\sdk\vod\Vod::GetCategories()
    ->setCateId(-1)
    ->setPageNo(4)
    ->setPageSize(10)
    ->request();

// Or Request like this
$request = \aliyun\sdk\vod\Vod::GetCategories();
$request->setCateId(-1);
$request->setPageNo(4);
$request->setPageSize(10)
$response = $request->request();
```

* Get Response Content
```php
dump($response->getContent());
```

## License
licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)