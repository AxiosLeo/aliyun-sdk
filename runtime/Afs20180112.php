<?php

namespace aliyun\sdk\services\Afs20180112;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180112
 *
 * @package aliyun\sdk\services\Afs20180112
 * @method ConfigurationStyle ConfigurationStyle()
 * @method SetEarlyWarning SetEarlyWarning()
 * @method DescribePersonMachineList DescribePersonMachineList()
 * @method CreateConfiguration CreateConfiguration()
 * @method AuthenticateSig AuthenticateSig()
 * @method AnalyzeNvc AnalyzeNvc()
 * @method UpdateConfigName UpdateConfigName()
 * @method DescribeCaptchaIpCity DescribeCaptchaIpCity()
 * @method DescribeOrderInfo DescribeOrderInfo()
 * @method DescribeEarlyWarning DescribeEarlyWarning()
 * @method DescribeCaptchaDay DescribeCaptchaDay()
 * @method DescribeCaptchaMin DescribeCaptchaMin()
 * @method DescribeCaptchaOrder DescribeCaptchaOrder()
 * @method DescribeConfigName DescribeConfigName()
 * @method DescribeCaptchaRisk DescribeCaptchaRisk()
 */
class V20180112
{
}

/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setApplyType($applyType)
 * @method string getApplyType()
 * @method $this setScene($scene)
 * @method string getScene()
 * @method $this setConfigurationMethod($configurationMethod)
 * @method string getConfigurationMethod()
 * @method $this setRefExtId($refExtId)
 * @method string getRefExtId()
 */
class ConfigurationStyle extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setWarnOpen($warnOpen)
 * @method bool getWarnOpen()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setFrequency($frequency)
 * @method string getFrequency()
 * @method $this setTimeOpen($timeOpen)
 * @method bool getTimeOpen()
 * @method $this setTimeBegin($timeBegin)
 * @method string getTimeBegin()
 * @method $this setTimeEnd($timeEnd)
 * @method string getTimeEnd()
 * @method $this setTitle($title)
 * @method string getTitle()
 */
class SetEarlyWarning extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribePersonMachineList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setConfigurationName($configurationName)
 * @method string getConfigurationName()
 * @method $this setApplyType($applyType)
 * @method string getApplyType()
 * @method $this setScene($scene)
 * @method string getScene()
 * @method $this setMaxPV($maxPV)
 * @method string getMaxPV()
 * @method $this setConfigurationMethod($configurationMethod)
 * @method string getConfigurationMethod()
 */
class CreateConfiguration extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 * @method $this setSig($sig)
 * @method string getSig()
 * @method $this setToken($token)
 * @method string getToken()
 * @method $this setScene($scene)
 * @method string getScene()
 * @method $this setRemoteIp($remoteIp)
 * @method string getRemoteIp()
 */
class AuthenticateSig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setScoreJsonStr($scoreJsonStr)
 * @method string getScoreJsonStr()
 * @method $this setData($data)
 * @method string getData()
 */
class AnalyzeNvc extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRefExtId($refExtId)
 * @method string getRefExtId()
 * @method $this setConfigName($configName)
 * @method string getConfigName()
 */
class UpdateConfigName extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setConfigName($configName)
 * @method string getConfigName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setTime($time)
 * @method string getTime()
 * @method $this setRefExtId($refExtId)
 * @method string getRefExtId()
 */
class DescribeCaptchaIpCity extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeOrderInfo extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeEarlyWarning extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setConfigName($configName)
 * @method string getConfigName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setTime($time)
 * @method string getTime()
 * @method $this setRefExtId($refExtId)
 * @method string getRefExtId()
 */
class DescribeCaptchaDay extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setConfigName($configName)
 * @method string getConfigName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setTime($time)
 * @method string getTime()
 * @method $this setRefExtId($refExtId)
 * @method string getRefExtId()
 */
class DescribeCaptchaMin extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeCaptchaOrder extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeConfigName extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setConfigName($configName)
 * @method string getConfigName()
 * @method $this setTime($time)
 * @method string getTime()
 * @method $this setRefExtId($refExtId)
 * @method string getRefExtId()
 */
class DescribeCaptchaRisk extends Request
{
}
