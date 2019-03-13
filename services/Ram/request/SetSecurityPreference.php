<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setEnableSaveMFATicket($EnableSaveMFATicket)
 * @method boolean getEnableSaveMFATicket()
 * @method $this setAllowUserToChangePassword($AllowUserToChangePassword)
 * @method boolean getAllowUserToChangePassword()
 * @method $this setAllowUserToManageAccessKeys($AllowUserToManageAccessKeys)
 * @method boolean getAllowUserToManageAccessKeys()
 * @method $this setAllowUserToManagePublicKeys($AllowUserToManagePublicKeys)
 * @method boolean getAllowUserToManagePublicKeys()
 * @method $this setAllowUserToManageMFADevices($AllowUserToManageMFADevices)
 * @method boolean getAllowUserToManageMFADevices()
 * @method $this setLoginSessionDuration($LoginSessionDuration)
 * @method integer getLoginSessionDuration()
 * @method $this setLoginNetworkMasks($LoginNetworkMasks)
 * @method string getLoginNetworkMasks()
 */
final class SetSecurityPreference extends RamCommon
{
    public $action = 'SetSecurityPreference';
}
