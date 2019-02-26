<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setMinimumPasswordLength($MinimumPasswordLength)
 * @method integer getMinimumPasswordLength()
 * @method $this setRequireLowercaseCharacters($RequireLowercaseCharacters)
 * @method boolean getRequireLowercaseCharacters()
 * @method $this setRequireUppercaseCharacters($RequireUppercaseCharacters)
 * @method boolean getRequireUppercaseCharacters()
 * @method $this setRequireNumbers($RequireNumbers)
 * @method boolean getRequireNumbers()
 * @method $this setRequireSymbols($RequireSymbols)
 * @method boolean getRequireSymbols()
 * @method $this setHardExpiry($HardExpiry)
 * @method boolean getHardExpiry()
 * @method $this setMaxPasswordAge($MaxPasswordAge)
 * @method integer getMaxPasswordAge()
 * @method $this setPasswordReusePrevention($PasswordReusePrevention)
 * @method integer getPasswordReusePrevention()
 * @method $this setMaxLoginAttemps($MaxLoginAttemps)
 * @method integer getMaxLoginAttemps()
 */
final class SetPasswordPolicy extends RamCommon
{
    public $action = 'SetPasswordPolicy';
}
