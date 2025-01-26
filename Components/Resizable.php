<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\ResizableHandles;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pDisabled(bool $disabled) [True to disable resizing.]
 * @method $this pHandles(ResizableHandles $handles) [Indicate the direction of resizable, 'n' is the north, 'e' is the east, etc.]
 * @method $this pMinWidth(int $minWidth) [The minimum width when resizing.]
 * @method $this pMinHeight(int $minHeight) [The minimum height when resizing.]
 * @method $this pMaxWidth(int $maxWidth) [The maximum width when resizing.]
 * @method $this pMaxHeight(int $maxHeight) [The maximum height when resizing.]
 * @method $this pEdge(int $edge) [The edge of border to be resized.]
 *
 * Event
 * @method $this eOnStartResize(Js $onStartResize) [Fires when start resizing.]
 * @method $this eOnResize(Js $onResize) [Fires during resizing. When return false, the DOM element will not acts actual resize action.]
 * @method $this eOnStopResize(Js $onStopResize) [Firest when stop resizing.]
 *
 * Method
 * @method $this mOptions() [Return the resizable options.]
 * @method $this mEnable() [Enable resizable feature.]
 * @method $this mDisable() [Disable resizable feature.]
 */
class Resizable extends Component
{
    public const string COMPONENT_NAME = 'resizable';
}