<?php

namespace aliyun\sdk\services\Kms20160120;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160120
 *
 * @package aliyun\sdk\services\Kms20160120
 * @method DeleteKeyMaterial DeleteKeyMaterial()
 * @method GetParametersForImport GetParametersForImport()
 * @method GenerateDataKey GenerateDataKey()
 * @method ListAliasesByKeyId ListAliasesByKeyId()
 * @method CancelKeyDeletion CancelKeyDeletion()
 * @method ScheduleKeyDeletion ScheduleKeyDeletion()
 * @method DisableKey DisableKey()
 * @method CreateKey CreateKey()
 * @method TagResource TagResource()
 * @method UntagResource UntagResource()
 * @method ListKeys ListKeys()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeKey DescribeKey()
 * @method EnableKey EnableKey()
 * @method Decrypt Decrypt()
 * @method ListAliases ListAliases()
 * @method UpdateAlias UpdateAlias()
 * @method Encrypt Encrypt()
 * @method CreateAlias CreateAlias()
 * @method ImportKeyMaterial ImportKeyMaterial()
 * @method DeleteAlias DeleteAlias()
 * @method ListResourceTags ListResourceTags()
 * @method ListTags ListTags()
 */
class V20160120
{
}

/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 */
class DeleteKeyMaterial extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setWrappingAlgorithm($wrappingAlgorithm)
 * @method string getWrappingAlgorithm()
 * @method $this setWrappingKeySpec($wrappingKeySpec)
 * @method string getWrappingKeySpec()
 */
class GetParametersForImport extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setKeySpec($keySpec)
 * @method string getKeySpec()
 * @method $this setNumberOfBytes($numberOfBytes)
 * @method int getNumberOfBytes()
 * @method $this setEncryptionContext($encryptionContext)
 * @method string getEncryptionContext()
 */
class GenerateDataKey extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAliasesByKeyId extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 */
class CancelKeyDeletion extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setPendingWindowInDays($pendingWindowInDays)
 * @method int getPendingWindowInDays()
 */
class ScheduleKeyDeletion extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 */
class DisableKey extends Request
{
}/**
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setKeyUsage($keyUsage)
 * @method string getKeyUsage()
 * @method $this setOrigin($origin)
 * @method string getOrigin()
 */
class CreateKey extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class TagResource extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setTagKeys($tagKeys)
 * @method string getTagKeys()
 */
class UntagResource extends Request
{
}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListKeys extends Request
{
}/**
 */
class DescribeRegions extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 */
class DescribeKey extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 */
class EnableKey extends Request
{
}/**
 * @method $this setCiphertextBlob($ciphertextBlob)
 * @method string getCiphertextBlob()
 * @method $this setEncryptionContext($encryptionContext)
 * @method string getEncryptionContext()
 */
class Decrypt extends Request
{
}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAliases extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 */
class UpdateAlias extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setPlaintext($plaintext)
 * @method string getPlaintext()
 * @method $this setEncryptionContext($encryptionContext)
 * @method string getEncryptionContext()
 */
class Encrypt extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 */
class CreateAlias extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 * @method $this setEncryptedKeyMaterial($encryptedKeyMaterial)
 * @method string getEncryptedKeyMaterial()
 * @method $this setImportToken($importToken)
 * @method string getImportToken()
 * @method $this setKeyMaterialExpireUnix($keyMaterialExpireUnix)
 * @method int getKeyMaterialExpireUnix()
 */
class ImportKeyMaterial extends Request
{
}/**
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 */
class DeleteAlias extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 */
class ListResourceTags extends Request
{
}/**
 * @method $this setKeyId($keyId)
 * @method string getKeyId()
 */
class ListTags extends Request
{
}
