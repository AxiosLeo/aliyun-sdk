<?php

namespace aliyun\sdk\services\HPC20160603;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160603
 *
 * @package aliyun\sdk\services\HPC20160603
 * @method ModifyJumpserverPassword ModifyJumpserverPassword()
 * @method DescribeInstances DescribeInstances()
 * @method DeleteInstance DeleteInstance()
 * @method CreateInstance CreateInstance()
 * @method StartJumpserver StartJumpserver()
 * @method RebootInstance RebootInstance()
 * @method StopJumpserver StopJumpserver()
 * @method RebootJumpserver RebootJumpserver()
 */
class V20160603
{
}

/**
 * @method $this setTOKEN($tOKEN)
 * @method string getTOKEN()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNewPassword($newPassword)
 * @method string getNewPassword()
 */
class ModifyJumpserverPassword extends Request
{

}/**
 * @method $this setTOKEN($tOKEN)
 * @method string getTOKEN()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 */
class DescribeInstances extends Request
{

}/**
 * @method $this setTOKEN($tOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DeleteInstance extends Request
{

}/**
 * @method $this setTOKEN($tOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPackageId($packageId)
 * @method string getPackageId()
 */
class CreateInstance extends Request
{

}/**
 * @method $this setTOKEN($tOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setForce($force)
 * @method int getForce()
 */
class StartJumpserver extends Request
{

}/**
 * @method $this setTOKEN($tOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class RebootInstance extends Request
{

}/**
 * @method $this setTOKEN($tOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setForce($force)
 * @method int getForce()
 */
class StopJumpserver extends Request
{

}/**
 * @method $this setTOKEN($tOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setForce($force)
 * @method int getForce()
 */
class RebootJumpserver extends Request
{

}