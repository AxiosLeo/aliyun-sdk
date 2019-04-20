<?php

namespace aliyun\sdk\services\PTS20150801;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150801
 *
 * @package aliyun\sdk\services\PTS20150801
 * @method SetScenarioStatus SetScenarioStatus()
 * @method GetTasks GetTasks()
 * @method ReportVuser ReportVuser()
 * @method StopTask StopTask()
 * @method AliyunOrderCreate AliyunOrderCreate()
 * @method SetTaskStatus SetTaskStatus()
 * @method CreateTransaction CreateTransaction()
 * @method ReportLogSample ReportLogSample()
 * @method AliyunOrderDefer AliyunOrderDefer()
 * @method ReportTestSample ReportTestSample()
 * @method GetScript GetScript()
 * @method SendWangWang SendWangWang()
 */
class V20150801
{
}

/**
 * @method $this setWskey($wskey)
 * @method string getWskey()
 * @method $this setScenarioId($scenarioId)
 * @method int getScenarioId()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setNodeIp($nodeIp)
 * @method string getNodeIp()
 */
class SetScenarioStatus extends Request
{

}/**
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class GetTasks extends Request
{

}/**
 * @method $this setWskey($wskey)
 * @method string getWskey()
 * @method $this setScenarioId($scenarioId)
 * @method int getScenarioId()
 * @method $this setVuser($vuser)
 * @method int getVuser()
 * @method $this setGmtCreated($gmtCreated)
 * @method int getGmtCreated()
 */
class ReportVuser extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setMsg($msg)
 * @method string getMsg()
 */
class StopTask extends Request
{

}/**
 * @method $this setproduct($product)
 * @method string getproduct()
 * @method $this setversion($version)
 * @method string getversion()
 * @method $this setaction($action)
 * @method string getaction()
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setdomain($domain)
 * @method string getdomain()
 * @method $this setdata($data)
 * @method string getdata()
 */
class AliyunOrderCreate extends Request
{

}/**
 * @method $this setWskey($wskey)
 * @method string getWskey()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SetTaskStatus extends Request
{

}/**
 * @method $this setScriptId($scriptId)
 * @method int getScriptId()
 * @method $this setTransactionName($transactionName)
 * @method string getTransactionName()
 */
class CreateTransaction extends Request
{

}/**
 * @method $this setWskey($wskey)
 * @method string getWskey()
 * @method $this setScenarioId($scenarioId)
 * @method int getScenarioId()
 * @method $this setLogSample($logSample)
 * @method string getLogSample()
 */
class ReportLogSample extends Request
{

}/**
 * @method $this setproduct($product)
 * @method string getproduct()
 * @method $this setversion($version)
 * @method string getversion()
 * @method $this setaction($action)
 * @method string getaction()
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setdomain($domain)
 * @method string getdomain()
 * @method $this setdata($data)
 * @method string getdata()
 */
class AliyunOrderDefer extends Request
{

}/**
 * @method $this setTestSample($testSample)
 * @method string getTestSample()
 */
class ReportTestSample extends Request
{

}/**
 * @method $this setScriptId($scriptId)
 * @method int getScriptId()
 * @method $this setTfsname($tfsname)
 * @method string getTfsname()
 */
class GetScript extends Request
{

}/**
 * @method $this setTo($to)
 * @method string getTo()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setMsg($msg)
 * @method string getMsg()
 */
class SendWangWang extends Request
{

}