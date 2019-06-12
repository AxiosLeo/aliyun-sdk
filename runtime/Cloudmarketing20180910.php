<?php

namespace aliyun\sdk\services\Cloudmarketing20180910;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180910
 *
 * @package aliyun\sdk\services\Cloudmarketing20180910
 * @method FetchTag FetchTag()
 * @method DeleteCrowd DeleteCrowd()
 * @method AnalysisCrowd AnalysisCrowd()
 * @method RedefineTag RedefineTag()
 * @method RequestUploadFile RequestUploadFile()
 * @method CalCrowdScale CalCrowdScale()
 * @method SyncCrowd SyncCrowd()
 * @method UpdateCategory UpdateCategory()
 * @method DescribeAuthBrand DescribeAuthBrand()
 * @method DownloadUDReport DownloadUDReport()
 * @method DescribeBrand DescribeBrand()
 * @method FetchFileSchemaData FetchFileSchemaData()
 * @method FavoriteTag FavoriteTag()
 * @method DeleteFile DeleteFile()
 * @method UpdateCrowd UpdateCrowd()
 * @method ProcessAfterUploadFile ProcessAfterUploadFile()
 * @method DownloadCrowd DownloadCrowd()
 * @method DefineCrowd DefineCrowd()
 * @method FetchCrowdDefine FetchCrowdDefine()
 * @method DescribeFile DescribeFile()
 * @method CreateCategory CreateCategory()
 * @method DefineFileSchema DefineFileSchema()
 * @method DescribeChannelBrand DescribeChannelBrand()
 * @method DescribeCategory DescribeCategory()
 * @method UpdateBrand UpdateBrand()
 * @method Auth2Brand Auth2Brand()
 * @method DescribeAuthChannelBrand DescribeAuthChannelBrand()
 * @method DefineTag DefineTag()
 * @method DescribeCrowd DescribeCrowd()
 * @method FetchFileSchema FetchFileSchema()
 * @method DescribeTag DescribeTag()
 * @method FetchCrowd FetchCrowd()
 * @method CreateBrand CreateBrand()
 */
class V20180910
{
}

/**
 * @method $this setTagId($tagId)
 * @method int getTagId()
 */
class FetchTag extends Request
{

}/**
 * @method $this setCrowdId($crowdId)
 * @method int getCrowdId()
 */
class DeleteCrowd extends Request
{

}/**
 * @method $this setCrowdId($crowdId)
 * @method int getCrowdId()
 * @method $this setTagIds($tagIds)
 * @method array getTagIds()
 */
class AnalysisCrowd extends Request
{

}/**
 * @method $this setFileId($fileId)
 * @method int getFileId()
 * @method $this setOptionType($optionType)
 * @method int getOptionType()
 * @method $this setColumnIndex($columnIndex)
 * @method int getColumnIndex()
 * @method $this setOptionDefines($optionDefines)
 * @method array getOptionDefines()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 * @method $this setTagDesc($tagDesc)
 * @method string getTagDesc()
 * @method $this setValidTime($validTime)
 * @method int getValidTime()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setTagId($tagId)
 * @method int getTagId()
 */
class RedefineTag extends Request
{

}/**
 */
class RequestUploadFile extends Request
{

}/**
 * @method $this setRequestJsonData($requestJsonData)
 * @method string getRequestJsonData()
 */
class CalCrowdScale extends Request
{

}/**
 * @method $this setCrowdId($crowdId)
 * @method int getCrowdId()
 * @method $this setChannelType($channelType)
 * @method int getChannelType()
 * @method $this setChannelBrands($channelBrands)
 * @method array getChannelBrands()
 * @method $this setOuterAccountNo($outerAccountNo)
 * @method string getOuterAccountNo()
 */
class SyncCrowd extends Request
{

}/**
 * @method $this setRequestJsonData($requestJsonData)
 * @method string getRequestJsonData()
 */
class UpdateCategory extends Request
{

}/**
 * @method $this setAccountIds($accountIds)
 * @method array getAccountIds()
 */
class DescribeAuthBrand extends Request
{

}/**
 * @method $this setCrowdId($crowdId)
 * @method int getCrowdId()
 */
class DownloadUDReport extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 */
class DescribeBrand extends Request
{

}/**
 * @method $this setFileId($fileId)
 * @method int getFileId()
 */
class FetchFileSchemaData extends Request
{

}/**
 * @method $this setTagId($tagId)
 * @method int getTagId()
 * @method $this setTagIds($tagIds)
 * @method array getTagIds()
 * @method $this setFavorite($favorite)
 * @method bool getFavorite()
 */
class FavoriteTag extends Request
{

}/**
 * @method $this setFileId($fileId)
 * @method int getFileId()
 */
class DeleteFile extends Request
{

}/**
 * @method $this setRequestJsonData($requestJsonData)
 * @method string getRequestJsonData()
 */
class UpdateCrowd extends Request
{

}/**
 * @method $this setOssPath($ossPath)
 * @method string getOssPath()
 * @method $this setSrcFileName($srcFileName)
 * @method string getSrcFileName()
 */
class ProcessAfterUploadFile extends Request
{

}/**
 * @method $this setCrowdId($crowdId)
 * @method int getCrowdId()
 */
class DownloadCrowd extends Request
{

}/**
 * @method $this setRequestJsonData($requestJsonData)
 * @method string getRequestJsonData()
 */
class DefineCrowd extends Request
{

}/**
 * @method $this setCrowdId($crowdId)
 * @method int getCrowdId()
 */
class FetchCrowdDefine extends Request
{

}/**
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileId($fileId)
 * @method int getFileId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setDataSchemaStatusList($dataSchemaStatusList)
 * @method array getDataSchemaStatusList()
 */
class DescribeFile extends Request
{

}/**
 * @method $this setParentCategoryId($parentCategoryId)
 * @method int getParentCategoryId()
 * @method $this setName($name)
 * @method string getName()
 */
class CreateCategory extends Request
{

}/**
 * @method $this setFileId($fileId)
 * @method int getFileId()
 * @method $this setFileColumns($fileColumns)
 * @method array getFileColumns()
 */
class DefineFileSchema extends Request
{

}/**
 */
class DescribeChannelBrand extends Request
{

}/**
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setRecursive($recursive)
 * @method bool getRecursive()
 */
class DescribeCategory extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 */
class UpdateBrand extends Request
{

}/**
 * @method $this setAccountId($accountId)
 * @method int getAccountId()
 * @method $this setBrandId($brandId)
 * @method int getBrandId()
 * @method $this setChannelBrandReqs($channelBrandReqs)
 * @method array getChannelBrandReqs()
 */
class Auth2Brand extends Request
{

}/**
 */
class DescribeAuthChannelBrand extends Request
{

}/**
 * @method $this setFileId($fileId)
 * @method int getFileId()
 * @method $this setOptionType($optionType)
 * @method int getOptionType()
 * @method $this setColumnIndex($columnIndex)
 * @method int getColumnIndex()
 * @method $this setOptionDefines($optionDefines)
 * @method array getOptionDefines()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 * @method $this setTagDesc($tagDesc)
 * @method string getTagDesc()
 * @method $this setValidTime($validTime)
 * @method int getValidTime()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 */
class DefineTag extends Request
{

}/**
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setCalStatus($calStatus)
 * @method int getCalStatus()
 * @method $this setSyncStatus($syncStatus)
 * @method int getSyncStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class DescribeCrowd extends Request
{

}/**
 * @method $this setFileId($fileId)
 * @method int getFileId()
 */
class FetchFileSchema extends Request
{

}/**
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setIncludeChild($includeChild)
 * @method bool getIncludeChild()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setOnlyFavorite($onlyFavorite)
 * @method bool getOnlyFavorite()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 */
class DescribeTag extends Request
{

}/**
 * @method $this setCrowdId($crowdId)
 * @method int getCrowdId()
 */
class FetchCrowd extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 */
class CreateBrand extends Request
{

}