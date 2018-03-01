
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


## Scheme

* VOD -> Done
* CDN -> Done
* OSS -> Base on aliyun/aliyun-oss-php-sdk
* SMS -> base on flc/dysms
* MTS -> in development
* LIVE
* ......

## Use

```php

require_once __DIR__. "/../vendor/autoload.php";

$access_id = "testAccessKeyId";
$access_secret = "testAccessKeySecret";

//Auth
\aliyun\sdk\Aliyun::auth($access_id,$access_secret);

//Setting Region
\aliyun\sdk\Aliyun::region('cn-shanghai');

//Request
$response = \aliyun\sdk\vod\Vod::GetCategories()
    ->setCateId(-1)
    ->setPageNo(4)
    ->setPageSize(10)
    ->request();

//Get Response Content
dump($response->getContent());

```

## License
licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)