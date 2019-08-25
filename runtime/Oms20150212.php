<?php

namespace aliyun\sdk\services\Oms20150212;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150212
 *
 * @package aliyun\sdk\services\Oms20150212
 * @method GetDataOpenConfig GetDataOpenConfig()
 * @method GetUserData GetUserData()
 * @method GetProductDefine GetProductDefine()
 */
class V20150212
{
}

/**
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setSiteBid($siteBid)
 * @method string getSiteBid()
 */
class GetDataOpenConfig extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 * @method $this setMaxResult($maxResult)
 * @method int getMaxResult()
 */
class GetUserData extends Request
{
}/**
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setsiteBid($siteBid)
 * @method string getsiteBid()
 */
class GetProductDefine extends Request
{
}
