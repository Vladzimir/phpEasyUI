<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\SideMenuFloatMenuPosition;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [The width of sidemenu component.]
 * @method $this pHeight(int $height) [The height of sidemenu component.]
 * @method $this pBorder(bool $border) [Defines if to show the border.]
 * @method $this pAnimate(bool $animate) [Defines if to show animation effect when expand or collapse menus.]
 * @method $this pMultiple(bool $multiple) [True to enable expanding multiple panels at one time.]
 * @method $this pData(array $data) [The menu data to display.]
 * @method $this pFloatMenuWidth(int $floatMenuWidth) [The float menu width.]
 * @method $this pFloatMenuPosition(SideMenuFloatMenuPosition $floatMenuPosition) [The float menu position. Available values are: 'left', 'right'.]
 *
 * Event
 * @method $this eOnSelect(Js $onSelect) [Fires when a menu is selected.]
 *
 * Method
 * @method $this mOptions() [Return the options of sidemenu.]
 * @method $this mResize($resize) [width, height   Resize the sidemenu.]
 * @method $this mCollapse() [Collapse the sidemenu.]
 * @method $this mExpand() [Expand the sidemenu.]
 * @method $this mDestroy() [Destroy the sidemenu.]
 */
class SideMenu extends Component
{
    public const string COMPONENT_NAME = 'sidemenu';
}