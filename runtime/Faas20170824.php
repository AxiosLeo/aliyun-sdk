<?php

namespace aliyun\sdk\services\Faas20170824;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170824
 *
 * @package aliyun\sdk\services\Faas20170824
 * @method LoadFpgaImageTask LoadFpgaImageTask()
 * @method PullCreateTask PullCreateTask()
 * @method DescribePublishFpgaImages DescribePublishFpgaImages()
 * @method DescribeLoadTaskStatus DescribeLoadTaskStatus()
 * @method UpdateImageAttribute UpdateImageAttribute()
 * @method PublishFpgaImage PublishFpgaImage()
 * @method UpdateCreateTask UpdateCreateTask()
 * @method DescribeFpgaImages DescribeFpgaImages()
 * @method DeletePublishFpgaImage DeletePublishFpgaImage()
 * @method DescribeFpgaInstances DescribeFpgaInstances()
 * @method CreateFpgaImageTask CreateFpgaImageTask()
 * @method DeleteFpgaImage DeleteFpgaImage()
 */
class V20170824
{
}

/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFpgaUUID($fpgaUUID)
 * @method string getFpgaUUID()
 * @method $this setFpgaType($fpgaType)
 * @method string getFpgaType()
 * @method $this setFpgaImageUUID($fpgaImageUUID)
 * @method string getFpgaImageUUID()
 * @method $this setFpgaImageType($fpgaImageType)
 * @method string getFpgaImageType()
 * @method $this setShellUUID($shellUUID)
 * @method string getShellUUID()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setOwnerAlias($ownerAlias)
 * @method string getOwnerAlias()
 * @method $this setObject($object)
 * @method string getObject()
 */
class LoadFpgaImageTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class PullCreateTask extends Request
{

}/**
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setImageID($imageID)
 * @method string getImageID()
 */
class DescribePublishFpgaImages extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFpgaUUID($fpgaUUID)
 * @method string getFpgaUUID()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class DescribeLoadTaskStatus extends Request
{

}/**
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFpgaImageUUID($fpgaImageUUID)
 * @method string getFpgaImageUUID()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class UpdateImageAttribute extends Request
{

}/**
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFpgaImageUUID($fpgaImageUUID)
 * @method string getFpgaImageUUID()
 * @method $this setImageID($imageID)
 * @method string getImageID()
 */
class PublishFpgaImage extends Request
{

}/**
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFpgaImageObjectName($fpgaImageObjectName)
 * @method string getFpgaImageObjectName()
 * @method $this setFpgaImageUUID($fpgaImageUUID)
 * @method string getFpgaImageUUID()
 * @method $this setState($state)
 * @method string getState()
 */
class UpdateCreateTask extends Request
{

}/**
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFpgaImages extends Request
{

}/**
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFpgaImageUUID($fpgaImageUUID)
 * @method string getFpgaImageUUID()
 * @method $this setImageID($imageID)
 * @method string getImageID()
 */
class DeletePublishFpgaImage extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class DescribeFpgaInstances extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setObject($object)
 * @method string getObject()
 * @method $this setFpgaType($fpgaType)
 * @method string getFpgaType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setShellUUID($shellUUID)
 * @method string getShellUUID()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setEncrypted($encrypted)
 * @method bool getEncrypted()
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setEmail($email)
 * @method string getEmail()
 */
class CreateFpgaImageTask extends Request
{

}/**
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFpgaImageUUID($fpgaImageUUID)
 * @method string getFpgaImageUUID()
 */
class DeleteFpgaImage extends Request
{

}