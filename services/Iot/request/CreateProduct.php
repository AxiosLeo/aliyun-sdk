<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductName($ProductName)
 * @method string getProductName()
 * @method $this setNodeType($NodeType)
 * @method integer getNodeType()
 * @method $this setDataFormat($DataFormat)
 * @method integer getDataFormat()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setAliyunCommodityCode($AliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setId2($Id2)
 * @method boolean getId2()
 * @method $this setCategoryId($CategoryId)
 * @method integer getCategoryId()
 * @method $this setProtocolType($ProtocolType)
 * @method string getProtocolType()
 * @method $this setNetType($NetType)
 * @method string getNetType()
 * @method $this setJoinPermissionId($JoinPermissionId)
 * @method string getJoinPermissionId()
 */
final class CreateProduct extends IotCommon
{
    public $action = 'CreateProduct';
}
