<?php

namespace Easyui\Components;

/**
 * Property/Params
 * @method $this pPasswordChar(string $passwordChar) [The password character to display on the textbox.]
 * @method $this pCheckInterval(int $checkInterval) [The interval time to check and convert the inputing characters to password characters.]
 * @method $this pLastDelay(int $lastDelay) [The delay time to convert the last inputing character to password character.]
 * @method $this pRevealed(bool $revealed) [Defines if to reveal the hidden password.]
 * @method $this pShowEye(bool $showEye) [Defines if to display the eye icon.]
 *
 * Event
 *
 * Method
 * @method $this mShowPassword() [Display the real password.]
 * @method $this mHidePassword() [Hide the real password.]
 */
class PasswordBox extends TextBox
{
    public const string COMPONENT_NAME = 'passwordbox';
}