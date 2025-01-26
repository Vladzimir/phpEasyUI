<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\CheckBoxLabelAlign;
use Easyui\Enums\CheckBoxLabelPosition;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [The width of checkbox component.]
 * @method $this pHeight(int $height) [The height of checkbox component.]
 * @method $this pValue(string $value) [The default value bound to the checkbox.]
 * @method $this pChecked(bool $checked) [Defines if the checkbox is checked.]
 * @method $this pDisabled(bool $disabled) [Defines if to disable the checkbox.]
 * @method $this pLabel(string $label) [The label bound to the checkbox.]
 * @method $this pLabelWidth(int $labelWidth) [The label width.]
 * @method $this pLabelPosition(CheckBoxLabelPosition $labelPosition) [The label position. Possible values are:'before', 'after', 'top'.]
 * @method $this pLabelAlign(CheckBoxLabelAlign $labelAlign) [The label alignment. Possible values are:'left', 'right'.]
 *
 * Event
 * @method $this eOnChange(Js $onChange) [Fires when the checked value is changed.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mSetValue($value) [Set the value for the checkbox.]
 * @method $this mDisable() [Disable the component.]
 * @method $this mEnable() [Enable the component.]
 * @method $this mCheck() [Check the component.]
 * @method $this mUncheck() [Uncheck the component.]
 * @method $this mClear() [Clear the 'checked' value.]
 * @method $this mReset() [Reset the 'checked' value.]
 */
class CheckBox extends Component
{
    public const string COMPONENT_NAME = 'checkbox';
}