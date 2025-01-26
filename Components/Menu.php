<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\MenuAlign;
use Easyui\Enums\MenuShow;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pId(string $id) [The id attribute of menu item.]
 * @method $this pText(string $text) [The item text.]
 * @method $this pIconCls(string $iconCls) [A CSS class to display a 16x16 icon on item left.]
 * @method $this pHref(string $href) [Set page location while clicking the menu item.]
 * @method $this pDisabled(bool $disabled) [Defines if to disable the menu item.]
 * @method $this pOnclick(Js $onclick) [The function to be called while clicking the menu item.]
 * @method $this pZIndex(int $zIndex) [Menu z-index style, increase from it.]
 * @method $this pLeft(int $left) [Menu left position.]
 * @method $this pTop(int $top) [Menu top position.]
 * @method $this pAlign(MenuAlign $align) [The menu alignment, possible values are 'left' or 'right'.]
 * @method $this pMinWidth(int $minWidth) [The minimum width of menu.]
 * @method $this pItemHeight(int $itemHeight) [The menu item height.]
 * @method $this pDuration(int $duration) [Defines duration time in milliseconds to hide when the mouse leaves the menu.]
 * @method $this pHideOnUnhover(bool $hideOnUnhover) [When true, automatically hides the menu when mouse exits it.]
 * @method $this pInline(bool $inline) [True to stay inside its parent, false to go on top of all elements.]
 * @method $this pFit(bool $fit) [True to set the menu size fit it's parent container.]
 *
 * Event
 * @method $this eOnShow(Js $onShow) [Fires after menu is showed.]
 * @method $this eOnHide(Js $onHide) [Fires after menu is hidden.]
 * @method $this eOnClick(Js $onClick) [Fires when the menu item is clicked.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mShow(MenuShow $pos) [Show a menu on specified position.<br>pos parameter have two properties:<br>left: the new left position.<br>top: the new top position.]
 * @method $this mHide() [Hide a menu.]
 * @method $this mDestroy() [Destroy a menu]
 * @method $this mGetItem($itemEl) [Get the menu item properties that include a 'target' property indicating the item DOM element.]
 * @method $this mSetText($param) [Set the specified menu item text. The 'param' parameter contains two properties:<br>target: DOM object, the menu item to be setted.<br>text: string, the new text value.]
 * @method $this mSetIcon($param) [Set the specified menu item icon. The 'param' parameter contains two properties:<br>target: DOM object, the menu item.<br>iconCls: the new icon class.]
 * @method $this mFindItem($param) [Find the specified menu item, the return object is same as the getItem method.]
 * @method $this mFindItems($param) [Find all the menu items that matches the specified conditions.]
 * @method $this mNavItems(Js $navItems) [Navigate all the menu items, return false to break.]
 * @method $this mAppendItem($options) [Append a new menu item, the 'options' parameter indicate the new item properties. By default the added item will become a top menu item. To append a sub menu item, a 'parent' property should be set to specify the parent item element that already has sub items.]
 * @method $this mRemoveItem($itemEl) [Remove the specified menu item.]
 * @method $this mEnableItem($itemEl) [Enable the menu item.]
 * @method $this mDisableItem($itemEl) [Disable the menu item.]
 * @method $this mShowItem($itemEl) [Show the menu item.]
 * @method $this mHideItem($itemEl) [Hide the menu item.]
 * @method $this mResize($menuEl) [Resize the special menu.]
 */
class Menu extends Component
{
    public const string COMPONENT_NAME = 'menu';
}