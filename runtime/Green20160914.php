<?php

namespace aliyun\sdk\services\Green20160914;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160914
 *
 * @package aliyun\sdk\services\Green20160914
 * @method ImageFeedback ImageFeedback()
 * @method TextKeywordFilter TextKeywordFilter()
 * @method ImageResults ImageResults()
 * @method ImageDetection ImageDetection()
 * @method ImageResult ImageResult()
 * @method AntispamResults AntispamResults()
 * @method PluginAntispamResults PluginAntispamResults()
 * @method TextWordCorrect TextWordCorrect()
 * @method AntispamDetection AntispamDetection()
 * @method PluginAntispamFeedback PluginAntispamFeedback()
 * @method PluginAntispamDetection PluginAntispamDetection()
 */
class V20160914
{
}

/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class ImageFeedback extends Request
{
}/**
 * @method $this setText($text)
 * @method string getText()
 */
class TextKeywordFilter extends Request
{
}/**
 * @method $this setTaskId($taskId)
 * @method array getTaskId()
 */
class ImageResults extends Request
{
}/**
 * @method $this setAsync($async)
 * @method bool getAsync()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 * @method $this setNotifySeed($notifySeed)
 * @method string getNotifySeed()
 * @method $this setImageUrl($imageUrl)
 * @method array getImageUrl()
 * @method $this setScene($scene)
 * @method array getScene()
 */
class ImageDetection extends Request
{
}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class ImageResult extends Request
{
}/**
 * @method $this setDataId($dataId)
 * @method array getDataId()
 */
class AntispamResults extends Request
{
}/**
 * @method $this setBizScene($bizScene)
 * @method string getBizScene()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setContentType($contentType)
 * @method string getContentType()
 * @method $this setPageIndex($pageIndex)
 * @method string getPageIndex()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class PluginAntispamResults extends Request
{
}/**
 * @method $this setText($text)
 * @method string getText()
 */
class TextWordCorrect extends Request
{
}/**
 * @method $this setDataId($dataId)
 * @method string getDataId()
 * @method $this setPostId($postId)
 * @method string getPostId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setPostNick($postNick)
 * @method string getPostNick()
 * @method $this setPostIp($postIp)
 * @method string getPostIp()
 * @method $this setPostMac($postMac)
 * @method string getPostMac()
 * @method $this setPostTime($postTime)
 * @method int getPostTime()
 * @method $this setMachineCode($machineCode)
 * @method string getMachineCode()
 * @method $this setParentDataId($parentDataId)
 * @method string getParentDataId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setPostContent($postContent)
 * @method string getPostContent()
 * @method $this setImageUrl($imageUrl)
 * @method array getImageUrl()
 */
class AntispamDetection extends Request
{
}/**
 * @method $this setIds($ids)
 * @method array getIds()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setActionResult($actionResult)
 * @method string getActionResult()
 */
class PluginAntispamFeedback extends Request
{
}/**
 * @method $this setBizScene($bizScene)
 * @method string getBizScene()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 * @method $this setFeedId($feedId)
 * @method string getFeedId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setPostTime($postTime)
 * @method int getPostTime()
 * @method $this setPostContent($postContent)
 * @method string getPostContent()
 * @method $this setContentType($contentType)
 * @method string getContentType()
 * @method $this setDynamicProp($dynamicProp)
 * @method string getDynamicProp()
 */
class PluginAntispamDetection extends Request
{
}
