<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\SliderMode;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [The width of slider.]
 * @method $this pHeight(int $height) [The height of slider.]
 * @method $this pMode(SliderMode $mode) [Indicate what type of slider. Possible values: 'h'(horizontal), 'v'(vertical).]
 * @method $this pReversed(bool $reversed) [Set to true the minimum value and maximum value will switch their positions.]
 * @method $this pShowTip(bool $showTip) [Defines if to display value information tip.]
 * @method $this pDisabled(bool $disabled) [Defines if to disable slider.]
 * @method $this pRange(bool $range) [Defines if to display range slider.]
 * @method $this pValue(int $value) [The default value.]
 * @method $this pMin(int $min) [The minimum allowed value.]
 * @method $this pMax(int $max) [The maximum allowed value.]
 * @method $this pStep(int $step) [The value to increase or descrease.]
 * @method $this pRule(array $rule) [Display labels beside slider, '|' — show just line.]
 * @method $this pTipFormatter(Js $tipFormatter) [A function to format slider value. Return string value that will display as tip.]
 * @method $this pConverter(JS $converter) [The converter function that allows users determine how to convert a value to the slider position or the slider position to the value.]
 *
 * Event
 * @method $this eOnChange(Js $onChange) [Fires when the field value is changed.]
 * @method $this eOnSlideStart(Js $onSlideStart) [Fires when begin to drag slider.]
 * @method $this eOnSlideEnd(Js $onSlideEnd) [Fires when end to drag slider.]
 * @method $this eOnComplete(Js $onComplete) [Fires when the slider value is changed by user, no matter dragged or clicked the slider.]
 *
 * Method
 * @method $this mOptions() [Return the slider options.]
 * @method $this mDestroy() [Destroy the slider object.]
 * @method $this mResize($param) [Set slider size. The 'param' parameter contains following properties:<br>width: the new slider width<br>height: the new slider height]
 * @method $this mGetValue() [Get slider value.]
 * @method $this mGetValues() [Get slider value array.]
 * @method $this mSetValue($value) [Set slider value.]
 * @method $this mSetValues($setValues) [Set slider value array.]
 * @method $this mClear() [Clear the slider value.]
 * @method $this mReset() [Reset the slider value.]
 * @method $this mEnable() [Enable the slider component.]
 * @method $this mDisable() [Disable the slider component.]
 */
class Slider extends Component
{
    public const string COMPONENT_NAME = 'slider';
}