<?php

namespace Easyui\Traits;

use Easyui\Components\Combo\KeyHandler;
use Easyui\Enums\TextBoxAlign;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pPanelWidth(int $panelWidth) [The width of the drop down panel.]
 * @method $this pPanelHeight(int $panelHeight) [The height of the drop down panel.]
 * @method $this pPanelMinWidth(int $panelMinWidth) [The minimum width of the drop down panel.]
 * @method $this pPanelMaxWidth(int $panelMaxWidth) [The maximum width of the drop down panel.]
 * @method $this pPanelMinHeight(int $panelMinHeight) [The minimum height of the drop down panel.]
 * @method $this pPanelMaxHeight(int $panelMaxHeight) [The maximum height of the drop down panel.]
 * @method $this pPanelAlign(TextBoxAlign $panelAlign) [panelAlign]
 * @method $this pMultiple(bool $multiple) [Defines if support multiple selection.]
 * @method $this pMultivalue(bool $multivalue) [Defines if to submit the multiple values.]
 * @method $this pReversed(bool $reversed) [Defines if to restore the original value when the inputing box loses focus.]
 * @method $this pSelectOnNavigation(bool $selectOnNavigation) [Defines if to select an item when navigating items with keyboard.]
 * @method $this pSeparator(string $separator) [The separator char for text when multiple selection.]
 * @method $this pHasDownArrow(bool $hasDownArrow) [Defines if to display the down arrow button.]
 * @method $this pDelay(int $delay) [Delay to do searching from the last key input event.]
 * @method $this pKeyHandler(KeyHandler|Js $keyHandler) [A function called when user press key.]
 *
 * Event
 * @method $this eOnShowPanel(Js $onShowPanel) [Fires when drop down panel show.]
 * @method $this eOnHidePanel(Js $onHidePanel) [Fires when drop down panel hide.]
 *
 * Method
 * @method $this mPanel() [Return the drop down panel object.]
 * @method $this mShowPanel() [Show the drop down panel.]
 * @method $this mHidePanel() [Hide the drop down panel.]
 * @method $this mValidate() [Validate the input value.]
 * @method $this mIsValid() [Return the validate result.]
 * @method $this mGetValues() [Get the component value array.]
 * @method $this mSetValues(array $values) [Set the component value array.]
 */
trait Combo
{

}