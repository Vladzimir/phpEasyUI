<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\AccordionHalign;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [The width of accordion container.]
 * @method $this pHeight(int $height) [The height of accordion container.]
 * @method $this pFit(bool $fit) [Set to true to set the accordion container size fit it's parent container.]
 * @method $this pBorder(bool $border) [Defines if to show the border.]
 * @method $this pAnimate(bool $animate) [Defines if to show animation effect when expand or collapse panel.]
 * @method $this pMultiple(bool $multiple) [True to enable expanding multiple panels at one time.]
 * @method $this pSelected(int $selected) [The initialized selected panel index.]
 * @method $this pFalign(AccordionHalign $halign) [The header alignment of the accordion panel. Possible values are: 'top', 'left', 'right'.]
 *
 * Event
 * @method $this eOnSelect(Js $onSelect) [Fires when a panel is selected.]
 * @method $this eOnUnselect(Js $onUnselect) [Fires when a panel is unselected.]
 * @method $this eOnAdd(Js $onAdd) [Fires when a new panel is added.]
 * @method $this eOnBeforeRemove(Js $onBeforeRemove) [Fires before a panel is removed, return false to cancel the remove action.]
 * @method $this eOnRemove(Js $onRemove) [Fires when a panel is removed.]
 *
 * Method
 * @method $this mOptions() [Return the options of accordion.]
 * @method $this mPanels() [Get all panels.]
 * @method $this mResize() [Resize the accordion.]
 * @method $this mGetSelected() [Get the first selected panel.]
 * @method $this mGetSelections() [Get the all the selected panels.]
 * @method $this mGetPanel($which) [Get the specified panel. The 'which' parameter can be the title or index of panel.]
 * @method $this mGetPanelIndex($panel) [Get the specified panel index.]
 * @method $this mSelect($which) [Select the specified panel. The 'which' parameter can be the title or index of panel.]
 * @method $this mUnselect($which) [Unselect the specified panel. The 'which' parameter can be the title or index of panel.]
 * @method $this mAdd($options) [Add a new panel. By default the added panel will become selected. To add a unselected new panel, pass the 'selected' property and set it to false.]
 * @method $this mRemove($which) [Remove the specified panel. The 'which' parameter can be the title or index of panel.]
 */
class Accordion extends Component
{
    public const string COMPONENT_NAME = 'accordion';
}