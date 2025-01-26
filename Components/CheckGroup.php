<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\CheckGroupDir;
use Easyui\Enums\CheckGroupLabelAlign;
use Easyui\Enums\CheckGroupLabelPosition;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pName(string $name) [The field name.]
 * @method $this pValue(array $value) [The checked item values.]
 * @method $this pData(array $data) [The data to be loaded. Each item contains 'value', 'label' and 'disabled' properties.]
 * @method $this pDir(CheckGroupDir $dir) [The layout direction. Possible values are 'h'(horizontal) or 'v'(vertical).]
 * @method $this pItemStyle(array $itemStyle) [The item style.]
 * @method $this pLabelWidth(int $labelWidth) [The label width.]
 * @method $this pLabelPosition(CheckGroupLabelPosition $labelPosition) [The label position. Possible values are:'before', 'after'.]
 * @method $this pLabelAlign(CheckGroupLabelAlign $labelAlign) [The label alignment. Possible values are:'left', 'right'.]
 *
 * Event
 * @method $this eOnChange(Js $onChange) [Fires when the checked values are changed.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mSetValue($values) [Set the values for the checkgroup.]
 * @method $this mGetValue() [Get the checked values.]
 */
class CheckGroup extends Component
{
    public const string COMPONENT_NAME = 'checkgroup';
}