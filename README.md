
> 阿里云服务SDK集 composer包

## 为什么开发这个SDK？
> 因为工作原因经常使用阿里云的服务，而官方的阿里云php-SDK是不支持composer的，所以常常要寻找其它开源的composer包或者自己开发阿里云服务组件。

> 而寻找的开源composer包一般都只包含一种常用的阿里云服务，比如oss或者sms之类的，但是诸如视频点播之类的就几乎没有了。

> 所以，我就在想，可不可以有一个sdk，可以支持所有的阿里云服务，同时又支持composer，也就了现在的这个项目。

> 接口请求主要根据阿里云文档开发


## 开发计划

* VOD 已完成
* OSS 
* SMS
* MTS
* LIVE
* CDN
* ......

## 代码示例
```php

require_once __DIR__. "/../vendor/autoload.php";

$access_id = "testAccessKeyId";
$access_secret = "testAccessKeySecret";

//授权
\aliyun\sdk\Aliyun::auth($access_id,$access_secret);

//设置区域
\aliyun\sdk\Aliyun::region('cn-shanghai');

//设置请求参数
$response = \aliyun\sdk\vod\Vod::GetCategories()
    ->setCateId(-1)    //设置分类id
    ->setPageNo(4)     //设置页数
    ->setPageSize(10)  //设置每页显示个数
    ->request();       //提交请求

//获取回调内容
dump($response->getContent());

```

## 如何贡献
> 参考library/vod下的代码实现

* 接口请求代码示例

```php
namespace aliyun\sdk\vod\request\Category;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class Get
 * @package aliyun\sdk\vod\request\Category
 * @method $this setCateId($cateId)
 * @method $this setPageNo($page_no)
 * @method $this setPageSize($page_size)
 */
class GetCategories extends VodCommon
{
    use Request;
}
```

## License
licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)