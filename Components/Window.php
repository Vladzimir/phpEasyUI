<?php

namespace Easyui\Components;

use Easyui\Enums\WindowBorder;

/**
 * Property/Params
 * @method $this pZIndex(int $zIndex) [Window z-index, increase from it.]
 * @method $this pDraggable(bool $draggable) [Defines if window can be dragged.]
 * @method $this pResizable(bool $resizable) [Defines if window can be resized.]
 * @method $this pShadow(bool $shadow) [If set to true, when window show the shadow will show also.]
 * @method $this pInline(bool $inline) [Defines how to stay the window, true to stay inside its parent, false to go on top of all elements.]
 * @method $this pModal(bool $modal) [Defines if window is a modal window.]
 * @method $this pBorder(bool|WindowBorder $border) [Defines the window border style. Possible values are: true, false, 'thin', 'thick'.]
 * @method $this pConstrain(bool $constrain) [Defines if to constrain the window position.]
 *
 * Event
 *
 * Method
 * @method $this mWindow() [Return the outer window object.]
 * @method $this mHcenter() [Center the window only horizontally.]
 * @method $this mVcenter() [Center the window only vertically.]
 * @method $this mCenter() [Center the window on screen.]
 */
class Window extends Panel
{
    public const string COMPONENT_NAME = 'window';
}