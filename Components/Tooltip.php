<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\TooltipPosition;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pPosition(TooltipPosition $position) [The tooltip position. Possible values are: 'left', 'right', 'top', 'bottom'.]
 * @method $this pContent(string|Js $content) [The tooltip content. It can be a function that returns the content directly.]
 * @method $this pTrackMouse(bool $trackMouse) [True to make tooltip move along with the mouse.]
 * @method $this pDeltaX(int $deltaX) [The horizontal distance from the tooltip position.]
 * @method $this pDeltaY(int $deltaY) [The vertical distance from the tooltip position.]
 * @method $this pShowEvent(string $showEvent) [The event that cause the tooltip to appear.]
 * @method $this pHideEvent(string $hideEvent) [The event that cause the tooltip to disappear.]
 * @method $this pShowDelay(int $showDelay) [The time delay to show tooltip.]
 * @method $this pHideDelay(int $hideDelay) [The time delay to hide tooltip.]
 *
 * Event
 * @method $this eOnShow(Js $onShow) [Fires when show tooltip.]
 * @method $this eOnHide(Js $onHide) [Fires when hide tooltip.]
 * @method $this eOnUpdate(Js $onUpdate) [Fires when tooltip content is updated.]
 * @method $this eOnPosition(Js $onPosition) [Fires when tooltip position is changed.]
 * @method $this eOnDestroy(Js $onDestroy) [Fires when tooltip is destroyed.]
 *
 * Method
 * @method $this mOptions() [Return the options property.]
 * @method $this mTip() [Return the tip object.]
 * @method $this mArrow() [Return the arrow object.]
 * @method $this mShow($e) [Display the tooltip.]
 * @method $this mHide($e) [Hide the tooltip.]
 * @method $this mUpdate($content) [Update the tooltip content.]
 * @method $this mReposition() [Reset the tooltip position.]
 * @method $this mDestroy() [Destroy the tooltip.]
 */
class Tooltip extends Component
{
    public const string COMPONENT_NAME = 'tooltip';
}