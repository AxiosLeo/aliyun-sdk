<?php

namespace aliyun\sdk\services\Sts20150401;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150401
 *
 * @package aliyun\sdk\services\Sts20150401
 * @method GenerateSessionAccessKey GenerateSessionAccessKey()
 * @method AssumeRoleWithSAML AssumeRoleWithSAML()
 * @method GetCallerIdentity GetCallerIdentity()
 * @method AssumeRole AssumeRole()
 */
class V20150401
{
}

/**
 * @method $this setDurationSeconds($durationSeconds)
 * @method int getDurationSeconds()
 */
class GenerateSessionAccessKey extends Request
{
}/**
 * @method $this setSAMLProviderArn($sAMLProviderArn)
 * @method string getSAMLProviderArn()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setSAMLAssertion($sAMLAssertion)
 * @method string getSAMLAssertion()
 * @method $this setPolicy($policy)
 * @method string getPolicy()
 * @method $this setDurationSeconds($durationSeconds)
 * @method int getDurationSeconds()
 */
class AssumeRoleWithSAML extends Request
{
}/**
 */
class GetCallerIdentity extends Request
{
}/**
 * @method $this setDurationSeconds($durationSeconds)
 * @method int getDurationSeconds()
 * @method $this setPolicy($policy)
 * @method string getPolicy()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setRoleSessionName($roleSessionName)
 * @method string getRoleSessionName()
 */
class AssumeRole extends Request
{
}
