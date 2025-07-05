<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pValue(int $number) [The field value.]
 * @method $this pMax(int $number) [The max star count.]
 * @method $this pSize(int $number) [The size of the rating stars.]
 * @method $this pHalf(bool $boolean) [Defines if to allow semi selection.]
 * @method $this pDisabled(bool $boolean) [Defines if to disable the field.]
 * @method $this pReadonly(bool $boolean) [Defines if the component is read-only.]
 * @method $this pColor(string|Js $string) [The default star color.]
 * @method $this pSelectedColor(string|Js $string) [The selected star color.]
 *
 * Event
 * @method $this eOnChange(Js $onChange) [Fires when the field value is changed.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mDestroy() [Destroy the rate component.]
 * @method $this mDisable() [Disable the component.]
 * @method $this mEnable() [Enable the component.]
 * @method $this mReadonly(bool $mode) [Enable/Disable 'readonly' mode.]
 * @method $this mClear() [Clear the component value.]
 * @method $this mReset() [Reset the component value.]
 * @method $this mInitValue($value) [Initialize the component value. Calling this method does not trigger the 'onChange' event.]
 * @method $this mSetValue($value) [Set the component value.]
 * @method $this mGetValue() [Get the component value.]
 */
class Rate extends Component
{
    public const string COMPONENT_NAME = 'rate';
}