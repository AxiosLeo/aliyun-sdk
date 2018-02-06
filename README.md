
> 阿里云服务SDK集合的composer包

## 为什么开发这个SDK？
> 因为工作原因经常使用阿里云的服务，而官方的阿里云php-SDK是不支持composer的，所以常常要寻找其它开源的composer包或者自己开发阿里云服务组件。
> 而寻找的开源composer包一般都只包含一种常用的阿里云服务，比如oss或者sms之类的，但是诸如视频点播之类的就几乎没有了。
> 所以，我就在想，可不可以有一个sdk，可以支持所有的阿里云服务，同时又支持composer，也就了现在的这个项目。


## 开发计划
> 参考阿里云官方的php-sdk （[aliyun-openapi-php-sdk](https://github.com/aliyun/aliyun-openapi-php-sdk)）

> 先重构官方的sdk(office目录)
> 再逐步开发代码更加优雅的SDK功能
> 最后会删除office目录下的官方sdk


* VOD
* OSS
* SMS
* MTS
* ......


## License
licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)