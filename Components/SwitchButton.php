<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [The width of switchbutton.]
 * @method $this pHeight(int $height) [The height of switchbutton.]
 * @method $this pHandleWidth(int $handleWidth) [The width of the center handle of switchbutton.]
 * @method $this pChecked(bool $checked) [Defines if the button is checked.]
 * @method $this pDisabled(bool $disabled) [Defines if to disable the button.]
 * @method $this pReadonly(bool $readonly) [Defines if the button is read-only.]
 * @method $this pReversed(bool $reversed) [Set to true the onText value and offText value will switch their positions.]
 * @method $this pOnText(string $onText) [The text value of the left side.]
 * @method $this pOffText(string $offText) [The text value of the right side.]
 * @method $this pHandleText(string $handleText) [The text value of the center handle.]
 * @method $this pValue(string $value) [The default value bound to the button.]
 *
 * Event
 * @method $this eOnChange(Js $onChange) [Fires when the checked value is changed.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mResize($param) [Resize the switchbutton.]
 * @method $this mDisable() [Disable the switchbutton]
 * @method $this mEnable() [Enable the switchbutton.]
 * @method $this mReadonly($mode) [Enable/Disable 'readonly' mode.]
 * @method $this mCheck() [Check the switchbutton.]
 * @method $this mUncheck() [Uncheck the switchbutton.]
 * @method $this mClear() [Clear the switchbutton's 'checked' value.]
 * @method $this mReset() [Reset the switchbutton's 'checked' value.]
 * @method $this mSetValue($value) [Set the switchbutton value.]
 */
class SwitchButton extends Component
{
    public const string COMPONENT_NAME = 'switchbutton';
}