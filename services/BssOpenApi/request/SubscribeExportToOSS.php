<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setSubscribeBucket($SubscribeBucket)
 * @method string getSubscribeBucket()
 * @method $this setBucketOwnerId($BucketOwnerId)
 * @method integer getBucketOwnerId()
 * @method $this setSubscribeType($SubscribeType)
 * @method array getSubscribeType()
 */
final class SubscribeExportToOSS extends BssOpenApiCommon
{
    public $action = 'SubscribeExportToOSS';
}
