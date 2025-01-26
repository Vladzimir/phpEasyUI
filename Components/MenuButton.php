<?php

namespace Easyui\Components;

use Easyui\Enums\MenuAlign;

/**
 * Property/Params
 * @method $this pMenu(string $menu) [A selector to create a corresponding menu.]
 * @method $this pMenuAlign(MenuAlign $menuAlign) [The alignment of top level menu. Possible values are: 'left', 'right'.]
 * @method $this pDuration(int $duration) [Defines duration time in milliseconds to show menu when hovering the button.]
 * @method $this pShowEvent(string $showEvent) [The event that cause the menu to appear.]
 * @method $this pHideEvent(string $hideEvent) [The event that cause the menu to disappear.]
 * @method $this pHasDownArrow(bool $hasDownArrow) [Defines if to display the down arrow icon.]
 *
 * Event
 *
 * Method
 * @method $this mDestroy() [Destroy the menubutton.]
 */
class MenuButton extends LinkButton
{
    public const string COMPONENT_NAME = 'menubutton';
}