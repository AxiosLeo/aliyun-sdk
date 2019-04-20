<?php

namespace aliyun\sdk\services\Oms20170821;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170821
 *
 * @package aliyun\sdk\services\Oms20170821
 * @method CheckBeforeDeployed CheckBeforeDeployed()
 * @method GetDomainCodeByEnv GetDomainCodeByEnv()
 * @method GetDomainList GetDomainList()
 * @method GetDomainCodes GetDomainCodes()
 */
class V20170821
{
}

/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setCompressEnable($compressEnable)
 * @method bool getCompressEnable()
 */
class CheckBeforeDeployed extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setEnviroment($enviroment)
 * @method string getEnviroment()
 * @method $this setCompressEnable($compressEnable)
 * @method bool getCompressEnable()
 */
class GetDomainCodeByEnv extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setEnviroment($enviroment)
 * @method string getEnviroment()
 * @method $this setCompressEnable($compressEnable)
 * @method bool getCompressEnable()
 */
class GetDomainList extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setEnviroment($enviroment)
 * @method string getEnviroment()
 * @method $this setProductNameList($productNameList)
 * @method array getProductNameList()
 * @method $this setCompressEnable($compressEnable)
 * @method bool getCompressEnable()
 * @method $this setRestrictOnline($restrictOnline)
 * @method bool getRestrictOnline()
 */
class GetDomainCodes extends Request
{

}