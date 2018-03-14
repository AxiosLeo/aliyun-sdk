
## Request Example
```php
<?php
require_once __DIR__. "/../vendor/autoload.php";

$access_id = "testAccessKeyId";
$access_secret = "testAccessKeySecret";

\aliyun\sdk\Aliyun::region('cn-hangzhou');

$response = \aliyun\sdk\api\API::DescribeApiGroups()->request();

dump($response->getContent());
```