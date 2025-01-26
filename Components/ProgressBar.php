<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [Set the progressbar width.]
 * @method $this pHeight(int $height) [The height of the component.]
 * @method $this pValue(int $value) [The percentage value.]
 * @method $this pText(string $text) [The text template to be displayed on component.]
 *
 * Event
 * @method $this eOnChange(Js $onChange) [Fires when the value is changed.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mResize($width) [Resize the component.]
 * @method $this mGetValue() [Return the current progress value.]
 * @method $this mSetValue($value) [Set a new progress value.]
 */
class ProgressBar extends Component
{
    public const string COMPONENT_NAME = 'progressbar';
}