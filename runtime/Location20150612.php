<?php

namespace aliyun\sdk\services\Location20150612;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150612
 *
 * @package aliyun\sdk\services\Location20150612
 * @method ListEndpoints ListEndpoints()
 * @method ListEndpointsByIp ListEndpointsByIp()
 * @method DescribeEndpoint DescribeEndpoint()
 * @method DescribeEndpoints DescribeEndpoints()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeServices DescribeServices()
 */
class V20150612
{
}

/**
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setSerivceCode($serivceCode)
 * @method string getSerivceCode()
 */
class ListEndpoints extends Request
{

}/**
 * @method $this setIp($ip)
 * @method string getIp()
 */
class ListEndpointsByIp extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class DescribeEndpoint extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 * @method $this setType($type)
 * @method string getType()
 */
class DescribeEndpoints extends Request
{

}/**
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class DescribeRegions extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class DescribeServices extends Request
{

}