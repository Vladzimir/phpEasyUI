<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\RadioGroupDir;
use Easyui\Enums\RadioGroupLabelAlign;
use Easyui\Enums\RadioGroupLabelPosition;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pName(string $name) [The field name.]
 * @method $this pValue(string $value) [The checked item value.]
 * @method $this pData(array $data) [The data to be loaded. Each item contains 'value', 'label' and 'disabled' properties.]
 * @method $this pDir(RadioGroupDir $dir) [The layout direction. Possible values are 'h'(horizontal) or 'v'(vertical).]
 * @method $this pItemStyle(array $itemStyle) [The item style.]
 * @method $this pLabelWidth(int $labelWidth) [The label width.]
 * @method $this pLabelPosition(RadioGroupLabelPosition $labelPosition) [The label position. Possible values are:'before', 'after'.]
 * @method $this pLabelAlign(RadioGroupLabelAlign $labelAlign) [The label alignment. Possible values are:'left', 'right'.]
 *
 * Event
 * @method $this eOnChange(Js $onChange) [Fires when the checked value is changed.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mSetValue($value) [Set the value for the radiogroup.]
 * @method $this mGetValue() [Get the checked value.]
 */
class RadioGroup extends Component
{
    public const string COMPONENT_NAME = 'radiogroup';
}