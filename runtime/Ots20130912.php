<?php

namespace aliyun\sdk\services\Ots20130912;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20130912
 *
 * @package aliyun\sdk\services\Ots20130912
 * @method GetUser GetUser()
 * @method UpdateInstance UpdateInstance()
 * @method DeleteUser DeleteUser()
 * @method InsertInstance InsertInstance()
 * @method UpdateUser UpdateUser()
 * @method DeleteInstance DeleteInstance()
 * @method ListInstance ListInstance()
 * @method InsertUser InsertUser()
 * @method GetInstance GetInstance()
 */
class V20130912
{
}

/**
 */
class GetUser extends Request
{
}/**
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 * @method $this setWriteCapacity($writeCapacity)
 * @method int getWriteCapacity()
 * @method $this setReadCapacity($readCapacity)
 * @method int getReadCapacity()
 * @method $this setEntityQuota($entityQuota)
 * @method int getEntityQuota()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateInstance extends Request
{
}/**
 */
class DeleteUser extends Request
{
}/**
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 * @method $this setClusterName($clusterName)
 * @method string getClusterName()
 * @method $this setWriteCapacity($writeCapacity)
 * @method int getWriteCapacity()
 * @method $this setReadCapacity($readCapacity)
 * @method int getReadCapacity()
 * @method $this setEntityQuota($entityQuota)
 * @method int getEntityQuota()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class InsertInstance extends Request
{
}/**
 * @method $this setInstanceQuota($instanceQuota)
 * @method int getInstanceQuota()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateUser extends Request
{
}/**
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 */
class DeleteInstance extends Request
{
}/**
 */
class ListInstance extends Request
{
}/**
 * @method $this setInstanceQuota($instanceQuota)
 * @method int getInstanceQuota()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class InsertUser extends Request
{
}/**
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 */
class GetInstance extends Request
{
}
