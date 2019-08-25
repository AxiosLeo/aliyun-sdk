<?php

namespace aliyun\sdk\services\Ram20150501;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150501
 *
 * @package aliyun\sdk\services\Ram20150501
 * @method ListVirtualMFADevices ListVirtualMFADevices()
 * @method CreatePolicy CreatePolicy()
 * @method GetRole GetRole()
 * @method GetUser GetUser()
 * @method GetPolicyVersion GetPolicyVersion()
 * @method DetachPolicyFromRole DetachPolicyFromRole()
 * @method DeleteGroup DeleteGroup()
 * @method DetachPolicyFromUser DetachPolicyFromUser()
 * @method BindMFADevice BindMFADevice()
 * @method DeleteRole DeleteRole()
 * @method DeleteUser DeleteUser()
 * @method UpdatePublicKey UpdatePublicKey()
 * @method DeleteVirtualMFADevice DeleteVirtualMFADevice()
 * @method CreatePolicyVersion CreatePolicyVersion()
 * @method ListUsers ListUsers()
 * @method GetUserMFAInfo GetUserMFAInfo()
 * @method CreateGroup CreateGroup()
 * @method AttachPolicyToRole AttachPolicyToRole()
 * @method AttachPolicyToUser AttachPolicyToUser()
 * @method UploadPublicKey UploadPublicKey()
 * @method CreateVirtualMFADevice CreateVirtualMFADevice()
 * @method ListEntitiesForPolicy ListEntitiesForPolicy()
 * @method GetPolicy GetPolicy()
 * @method ListUsersForGroup ListUsersForGroup()
 * @method UpdateGroup UpdateGroup()
 * @method ListPolicies ListPolicies()
 * @method UpdateRole UpdateRole()
 * @method UpdateUser UpdateUser()
 * @method DeleteAccessKey DeleteAccessKey()
 * @method ListAccessKeys ListAccessKeys()
 * @method GetGroup GetGroup()
 * @method SetSecurityPreference SetSecurityPreference()
 * @method ChangePassword ChangePassword()
 * @method GetAccountAlias GetAccountAlias()
 * @method AddUserToGroup AddUserToGroup()
 * @method AttachPolicyToGroup AttachPolicyToGroup()
 * @method DeleteLoginProfile DeleteLoginProfile()
 * @method ListRoles ListRoles()
 * @method CreateLoginProfile CreateLoginProfile()
 * @method ListGroups ListGroups()
 * @method ListPolicyVersions ListPolicyVersions()
 * @method ListPoliciesForGroup ListPoliciesForGroup()
 * @method CreateUser CreateUser()
 * @method CreateRole CreateRole()
 * @method DeletePublicKey DeletePublicKey()
 * @method GetLoginProfile GetLoginProfile()
 * @method ListGroupsForUser ListGroupsForUser()
 * @method CreateAccessKey CreateAccessKey()
 * @method DetachPolicyFromGroup DetachPolicyFromGroup()
 * @method DeletePolicyVersion DeletePolicyVersion()
 * @method GetPublicKey GetPublicKey()
 * @method ListPublicKeys ListPublicKeys()
 * @method GetPasswordPolicy GetPasswordPolicy()
 * @method ClearAccountAlias ClearAccountAlias()
 * @method GetSecurityPreference GetSecurityPreference()
 * @method ListPoliciesForRole ListPoliciesForRole()
 * @method UpdateAccessKey UpdateAccessKey()
 * @method ListPoliciesForUser ListPoliciesForUser()
 * @method DeletePolicy DeletePolicy()
 * @method RemoveUserFromGroup RemoveUserFromGroup()
 * @method UnbindMFADevice UnbindMFADevice()
 * @method SetAccountAlias SetAccountAlias()
 * @method UpdateLoginProfile UpdateLoginProfile()
 * @method GetAccessKeyLastUsed GetAccessKeyLastUsed()
 * @method SetDefaultPolicyVersion SetDefaultPolicyVersion()
 * @method SetPasswordPolicy SetPasswordPolicy()
 */
class V20150501
{
}

/**
 */
class ListVirtualMFADevices extends Request
{
}/**
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setPolicyDocument($policyDocument)
 * @method string getPolicyDocument()
 */
class CreatePolicy extends Request
{
}/**
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 */
class GetRole extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class GetUser extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setVersionId($versionId)
 * @method string getVersionId()
 */
class GetPolicyVersion extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 */
class DetachPolicyFromRole extends Request
{
}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class DeleteGroup extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class DetachPolicyFromUser extends Request
{
}/**
 * @method $this setSerialNumber($serialNumber)
 * @method string getSerialNumber()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setAuthenticationCode1($authenticationCode1)
 * @method string getAuthenticationCode1()
 * @method $this setAuthenticationCode2($authenticationCode2)
 * @method string getAuthenticationCode2()
 */
class BindMFADevice extends Request
{
}/**
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 */
class DeleteRole extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class DeleteUser extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setUserPublicKeyId($userPublicKeyId)
 * @method string getUserPublicKeyId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class UpdatePublicKey extends Request
{
}/**
 * @method $this setSerialNumber($serialNumber)
 * @method string getSerialNumber()
 */
class DeleteVirtualMFADevice extends Request
{
}/**
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setPolicyDocument($policyDocument)
 * @method string getPolicyDocument()
 * @method $this setSetAsDefault($setAsDefault)
 * @method bool getSetAsDefault()
 */
class CreatePolicyVersion extends Request
{
}/**
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxItems($maxItems)
 * @method int getMaxItems()
 */
class ListUsers extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class GetUserMFAInfo extends Request
{
}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setComments($comments)
 * @method string getComments()
 */
class CreateGroup extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 */
class AttachPolicyToRole extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class AttachPolicyToUser extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setPublicKeySpec($publicKeySpec)
 * @method string getPublicKeySpec()
 */
class UploadPublicKey extends Request
{
}/**
 * @method $this setVirtualMFADeviceName($virtualMFADeviceName)
 * @method string getVirtualMFADeviceName()
 */
class CreateVirtualMFADevice extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 */
class ListEntitiesForPolicy extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 */
class GetPolicy extends Request
{
}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxItems($maxItems)
 * @method int getMaxItems()
 */
class ListUsersForGroup extends Request
{
}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setNewGroupName($newGroupName)
 * @method string getNewGroupName()
 * @method $this setNewComments($newComments)
 * @method string getNewComments()
 */
class UpdateGroup extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxItems($maxItems)
 * @method int getMaxItems()
 */
class ListPolicies extends Request
{
}/**
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setNewAssumeRolePolicyDocument($newAssumeRolePolicyDocument)
 * @method string getNewAssumeRolePolicyDocument()
 */
class UpdateRole extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setNewUserName($newUserName)
 * @method string getNewUserName()
 * @method $this setNewDisplayName($newDisplayName)
 * @method string getNewDisplayName()
 * @method $this setNewMobilePhone($newMobilePhone)
 * @method string getNewMobilePhone()
 * @method $this setNewEmail($newEmail)
 * @method string getNewEmail()
 * @method $this setNewComments($newComments)
 * @method string getNewComments()
 */
class UpdateUser extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setUserAccessKeyId($userAccessKeyId)
 * @method string getUserAccessKeyId()
 */
class DeleteAccessKey extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class ListAccessKeys extends Request
{
}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class GetGroup extends Request
{
}/**
 * @method $this setEnableSaveMFATicket($enableSaveMFATicket)
 * @method bool getEnableSaveMFATicket()
 * @method $this setAllowUserToChangePassword($allowUserToChangePassword)
 * @method bool getAllowUserToChangePassword()
 * @method $this setAllowUserToManageAccessKeys($allowUserToManageAccessKeys)
 * @method bool getAllowUserToManageAccessKeys()
 * @method $this setAllowUserToManagePublicKeys($allowUserToManagePublicKeys)
 * @method bool getAllowUserToManagePublicKeys()
 * @method $this setAllowUserToManageMFADevices($allowUserToManageMFADevices)
 * @method bool getAllowUserToManageMFADevices()
 * @method $this setLoginSessionDuration($loginSessionDuration)
 * @method int getLoginSessionDuration()
 * @method $this setLoginNetworkMasks($loginNetworkMasks)
 * @method string getLoginNetworkMasks()
 */
class SetSecurityPreference extends Request
{
}/**
 * @method $this setOldPassword($oldPassword)
 * @method string getOldPassword()
 * @method $this setNewPassword($newPassword)
 * @method string getNewPassword()
 */
class ChangePassword extends Request
{
}/**
 */
class GetAccountAlias extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class AddUserToGroup extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class AttachPolicyToGroup extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class DeleteLoginProfile extends Request
{
}/**
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxItems($maxItems)
 * @method int getMaxItems()
 */
class ListRoles extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setPasswordResetRequired($passwordResetRequired)
 * @method bool getPasswordResetRequired()
 * @method $this setMFABindRequired($mFABindRequired)
 * @method bool getMFABindRequired()
 */
class CreateLoginProfile extends Request
{
}/**
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxItems($maxItems)
 * @method int getMaxItems()
 */
class ListGroups extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 */
class ListPolicyVersions extends Request
{
}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class ListPoliciesForGroup extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setDisplayName($displayName)
 * @method string getDisplayName()
 * @method $this setMobilePhone($mobilePhone)
 * @method string getMobilePhone()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setComments($comments)
 * @method string getComments()
 */
class CreateUser extends Request
{
}/**
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAssumeRolePolicyDocument($assumeRolePolicyDocument)
 * @method string getAssumeRolePolicyDocument()
 */
class CreateRole extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setUserPublicKeyId($userPublicKeyId)
 * @method string getUserPublicKeyId()
 */
class DeletePublicKey extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class GetLoginProfile extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class ListGroupsForUser extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class CreateAccessKey extends Request
{
}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class DetachPolicyFromGroup extends Request
{
}/**
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setVersionId($versionId)
 * @method string getVersionId()
 */
class DeletePolicyVersion extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setUserPublicKeyId($userPublicKeyId)
 * @method string getUserPublicKeyId()
 */
class GetPublicKey extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class ListPublicKeys extends Request
{
}/**
 */
class GetPasswordPolicy extends Request
{
}/**
 */
class ClearAccountAlias extends Request
{
}/**
 */
class GetSecurityPreference extends Request
{
}/**
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 */
class ListPoliciesForRole extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setUserAccessKeyId($userAccessKeyId)
 * @method string getUserAccessKeyId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class UpdateAccessKey extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class ListPoliciesForUser extends Request
{
}/**
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 */
class DeletePolicy extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class RemoveUserFromGroup extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class UnbindMFADevice extends Request
{
}/**
 * @method $this setAccountAlias($accountAlias)
 * @method string getAccountAlias()
 */
class SetAccountAlias extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setPasswordResetRequired($passwordResetRequired)
 * @method bool getPasswordResetRequired()
 * @method $this setMFABindRequired($mFABindRequired)
 * @method bool getMFABindRequired()
 */
class UpdateLoginProfile extends Request
{
}/**
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setUserAccessKeyId($userAccessKeyId)
 * @method string getUserAccessKeyId()
 */
class GetAccessKeyLastUsed extends Request
{
}/**
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setVersionId($versionId)
 * @method string getVersionId()
 */
class SetDefaultPolicyVersion extends Request
{
}/**
 * @method $this setMinimumPasswordLength($minimumPasswordLength)
 * @method int getMinimumPasswordLength()
 * @method $this setRequireLowercaseCharacters($requireLowercaseCharacters)
 * @method bool getRequireLowercaseCharacters()
 * @method $this setRequireUppercaseCharacters($requireUppercaseCharacters)
 * @method bool getRequireUppercaseCharacters()
 * @method $this setRequireNumbers($requireNumbers)
 * @method bool getRequireNumbers()
 * @method $this setRequireSymbols($requireSymbols)
 * @method bool getRequireSymbols()
 * @method $this setHardExpiry($hardExpiry)
 * @method bool getHardExpiry()
 * @method $this setMaxPasswordAge($maxPasswordAge)
 * @method int getMaxPasswordAge()
 * @method $this setPasswordReusePrevention($passwordReusePrevention)
 * @method int getPasswordReusePrevention()
 * @method $this setMaxLoginAttemps($maxLoginAttemps)
 * @method int getMaxLoginAttemps()
 */
class SetPasswordPolicy extends Request
{
}
