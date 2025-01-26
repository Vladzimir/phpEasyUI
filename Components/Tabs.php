<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\TabsPosition;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [The width of tabs container.]
 * @method $this pHeight(int $height) [The height of tabs container.]
 * @method $this pPlain(bool $plain) [True to render the tab strip without a background container image.]
 * @method $this pFit(bool $fit) [True to set the size of tabs container to fit it's parent container.]
 * @method $this pBorder(bool $border) [True to show tabs container border.]
 * @method $this pScrollIncrement(int $scrollIncrement) [The number of pixels to scroll each time a tab scroll button is pressed.]
 * @method $this pScrollDuration(int $scrollDuration) [The number of milliseconds that each scroll animation should last.]
 * @method $this pTools(array|string $tools) [The toolbar placed on left or right side of header. Possible values:<br>1. An array indicate the tools, each tool options is same as linkbutton.<br>A selector point to the \<div\> that contains the tools.]
 * @method $this pToolPosition(TabsPosition $toolPosition) [The toolbar position. Possible values: 'left', 'right', 'top', 'bottom'.]
 * @method $this pTabPosition(TabsPosition $tabPosition) [The tab position. Possible values: 'top', 'bottom', 'left', 'right'.]
 * @method $this pHeaderWidth(int $headerWidth) [The tab header width, it is valid only when tabPosition is set to 'left' or 'right'.]
 * @method $this pTabWidth(int $tabWidth) [The width of tab strip.]
 * @method $this pTabHeight(int $tabHeight) [The height of tab strip.]
 * @method $this pSelected(int $selected) [The initialized selected tab index.]
 * @method $this pShowHeader(bool $showHeader) [True to display tabs header.]
 * @method $this pJustified(bool $justified) [True to make tab strips equal widths of their parent container.]
 * @method $this pNarrow(bool $narrow) [True to remove the space between tab strips.]
 * @method $this pPill(bool $pill) [True to make tab strips look like pills.]
 *
 * Event
 * @method $this eOnLoad(Js $onLoad) [Fires when an ajax tab panel finish loading remote data.]
 * @method $this eOnSelect(Js $onSelect) [Fires when user select a tab panel.]
 * @method $this eOnUnselect(Js $onUnselect) [Fires when user unselect a tab panel.]
 * @method $this eOnBeforeClose(Js $onBeforeClose) [Fires before the tab panel is closed, return false to cancel this close action.]
 * @method $this eOnClose(Js $onClose) [Fires when user close a tab panel.]
 * @method $this eOnAdd(Js $onAdd) [Fires when a new tab panel is added.]
 * @method $this eOnUpdate(Js $onUpdate) [Fires when a tab panel is updated.]
 * @method $this eOnContextMenu(Js $onContextMenu) [Fires when a tab panel is right clicked.]
 *
 * Method
 * @method $this mOptions() [Return the tabs options.]
 * @method $this mTabs() [Return all tab panels.]
 * @method $this mResize() [Resize the tabs container and do layout.]
 * @method $this mAdd($options) [Add a new tab panel, the options parameter is a config object, see tab panel properties for more details. When adding a new tab panel, it will become selected.]
 * @method $this mClose($which) [Close a tab panel, the 'which' parameter can be the title or index of tab panel to be closed.]
 * @method $this mGetTab($which) [Get the specified tab panel, the 'which' parameter can be the title or index of tab panel.]
 * @method $this mGetTabIndex($tab) [Get the specified tab panel index]
 * @method $this mGetSelected() [Get the selected tab panel.]
 * @method $this mSelect($which) [Select a tab panel, the 'which' parameter can be the title or index of tab panel.]
 * @method $this mUnselect($which) [Select a tab panel, the 'which' parameter can be the title or index of tab panel.]
 * @method $this mShowHeader() [Show the tabs header.]
 * @method $this mHideHeader() [Hide the tabs header.]
 * @method $this mShowTool() [Show the tabs tools.]
 * @method $this mHideTool() [Hide the tabs tools.]
 * @method $this mExists($which) [Indicate if the special panel is exists, the 'which' parameter can be the title or index of tab panel.]
 * @method $this mUpdate($param) [Update the specified tab panel, the param parameter contains two properties:<br>tab: the tab panel to be updated.<br>type: the updating type, available values are: 'header', 'body', 'all'.<br>options: the panel options.]
 * @method $this mEnableTab($which) [Enable the specified tab panel, the 'which' parameter can be the title or index of tab panel.]
 * @method $this mDisableTab($which) [Disable the specified tab panel, the 'which' parameter can be the title or index of tab panel.]
 * @method $this mScrollBy($deltaX) [Scroll the tab header by the specified amount of pixels, negative values scroll to the right, positive values scroll to the left.]
 */
class Tabs extends Component
{
    public const string COMPONENT_NAME = 'tabs';
}