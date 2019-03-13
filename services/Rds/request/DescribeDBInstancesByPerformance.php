<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setSortMethod($SortMethod)
 * @method string getSortMethod()
 * @method $this setSortKey($SortKey)
 * @method string getSortKey()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setTag_1_key($Tag_1_key)
 * @method string getTag_1_key()
 * @method $this setTag_2_key($Tag_2_key)
 * @method string getTag_2_key()
 * @method $this setTag_3_key($Tag_3_key)
 * @method string getTag_3_key()
 * @method $this setTag_4_key($Tag_4_key)
 * @method string getTag_4_key()
 * @method $this setTag_5_key($Tag_5_key)
 * @method string getTag_5_key()
 * @method $this setTag_1_value($Tag_1_value)
 * @method string getTag_1_value()
 * @method $this setTag_2_value($Tag_2_value)
 * @method string getTag_2_value()
 * @method $this setTag_3_value($Tag_3_value)
 * @method string getTag_3_value()
 * @method $this setTag_4_value($Tag_4_value)
 * @method string getTag_4_value()
 * @method $this setTag_5_value($Tag_5_value)
 * @method string getTag_5_value()
 */
final class DescribeDBInstancesByPerformance extends RdsCommon
{
    public $action = 'DescribeDBInstancesByPerformance';
}
