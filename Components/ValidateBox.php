<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\ValidateBoxTipPosition;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pRequired(bool $required) [Defines whether the field should be inputed.]
 * @method $this pValidType(string|array $validType) [Defines the field valid type, such as email, url, etc. Possible values are:<br>1) a valid type string, apply a single validate rule.<br>2) a valid type array, apply multiple validate rules.<br>3) a key/value pairs, the key is the validing type name, the value is an array consisting validating parameters.]
 * @method $this pDelay(int $delay) [Delay to validate from the last inputting value.]
 * @method $this pMissingMessage(string $missingMessage) [Tooltip text that appears when the text box is empty.]
 * @method $this pInvalidMessage(string $invalidMessage) [Tooltip text that appears when the content of text box is invalid.]
 * @method $this pTipPosition(ValidateBoxTipPosition $tipPosition) [Defines the position of tip message when the content of text box is invalid. Possible values: 'left', 'right', 'top', 'bottom'.]
 * @method $this pDeltaX(int $deltaX) [Tooltip offset in the X direction.]
 * @method $this pNovalidate(bool $novalidate) [Defines whether to turn off validation.]
 * @method $this pEditable(bool $editable) [Defines whether the user can type text directly into the field.]
 * @method $this pDisabled(bool $disabled) [Defines whether to disable the validatebox]
 * @method $this pReadonly(bool $readonly) [Defines whether the component is read-only.]
 * @method $this pValidateOnCreate(bool $validateOnCreate) [Defines whether to validate after creating the component.]
 * @method $this pValidateOnBlur(bool $validateOnBlur) [Defines whether to validate when losing focus.]
 *
 * Event
 * @method $this eOnBeforeValidate(Js $onBeforeValidate) [Fires before validate on a field.]
 * @method $this eOnValidate(Js $valid) [Fires when validate on a field.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mDestroy() [Remove and destroy the component.]
 * @method $this mValidate() [Do the validation to determine whether the content of text box is valid.]
 * @method $this mIsValid() [Call validate method and return the validation result, true or false.]
 * @method $this mEnableValidation() [Enable validation.]
 * @method $this mDisableValidation() [Disable validation.]
 * @method $this mResetValidation() [Reset validation.]
 * @method $this mEnable() [Enable the component.]
 * @method $this mDisable() [Disable the component.]
 * @method $this mReadonly(bool $mode = true) [Enable/Disable 'readonly' mode.]
 */
class ValidateBox extends Component
{
    public const string COMPONENT_NAME = 'validatebox';
}