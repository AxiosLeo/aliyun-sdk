

```php
$request = \aliyun\sdk\alidns\AlidnsClient::action("DescribeDomains");
$request->setParam("PageNumber",1);
$request->setParam("PageSize",15);
$response = $request->request();
dump($response->getContent());
```