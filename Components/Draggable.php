<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\DraggableAxis;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pProxy(Js|string $proxy) [A proxy element to be used when dragging, when set to 'clone', a clone element is used as proxy. If a function is specified, it must return a jQuery object.]
 * @method $this pRevert(bool $revert) [If set to true, the element will return to its start position when dragging stops.]
 * @method $this pCursor(string $cursor) [The css cursor when dragging.]
 * @method $this pDeltaX(int $deltaX) [The dragged element position x corresponding to current cursor]
 * @method $this pDeltaY(int $deltaY) [The dragged element position y corresponding to current cursor]
 * @method $this pHandle(string $handle) [The handle that start the draggable.]
 * @method $this pDisabled(bool $disabled) [True to stop draggable.]
 * @method $this pEdge(int $edge) [The drag width in which can start draggable.]
 * @method $this pAxis(DraggableAxis $axis) [Defines the axis which the dragged elements moves on, available value is 'v' or 'h', when set to null will move across 'v' and 'h' direction.]
 * @method $this pDelay(int $delay) [Defines the delay time in milliseconds to start a drag operation.]
 *
 * Event
 * @method $this eOnBeforeDrag(Js $onBeforeDrag) [Fires before dragging, return false to cancel this dragging.]
 * @method $this eOnStartDrag(Js $onStartDrag) [Fires when the target object start dragging.]
 * @method $this eOnDrag(Js $onDrag) [Fires during dragging. Return false will not do dragging actually.]
 * @method $this eOnEndDrag(Js $onEndDrag) [Fires when the dragging ends. This event is triggered before onStopDrag event.]
 * @method $this eOnStopDrag(Js $onStopDrag) [Fires when the dragging stops.]
 *
 * Method
 * @method $this mOptions() [Return the options property.]
 * @method $this mProxy() [Return the drag proxy if the proxy property is setted.]
 * @method $this mEnable() [Enable the drag action.]
 * @method $this mDisable() [Disable the drag action.]
 */
class Draggable extends Component
{
    public const string COMPONENT_NAME = 'draggable';
}