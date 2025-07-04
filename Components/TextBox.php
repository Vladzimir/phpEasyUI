<?php

namespace Easyui\Components;

use Easyui\Enums\TextBoxLabelPosition;
use Easyui\Enums\TextBoxAlign;
use Easyui\Enums\TextBoxType;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int|string $width) [The width of the component.]
 * @method $this pHeight(int|string $height) [The height of the component.]
 * @method $this pCls(string $cls) [Add a CSS class to the textbox.]
 * @method $this pPrompt(string $prompt) [The prompt message to be displayed in input box.]
 * @method $this pValue(string $value) [The default value.]
 * @method $this pType(TextBoxType $type) [The textbox type. Possible values are 'text' and 'password'.]
 * @method $this pLabel(string|Js $label) [The label bound to textbox.]
 * @method $this pLabelWidth(int $labelWidth) [The label width.]
 * @method $this pLabelPosition(TextBoxLabelPosition $labelPosition) [The label position. Possible values are:'before', 'after', 'top'.]
 * @method $this pLabelAlign(TextBoxAlign $labelAlign) [The label alignment. Possible values are:'left', 'right'.]
 * @method $this pMultiline(bool $multiline) [Defines if this is a multiline textbox.]
 * @method $this pEditable(bool $editable) [Defines if the user can type text directly into the field.]
 * @method $this pDisabled(bool $disabled) [Defines if to disable the field.]
 * @method $this pReadonly(bool $readonly) [Defines if the component is read-only.]
 * @method $this pIcons(array $icons) [The icons attached to the textbox. Each item has the following properties:<br>iconCls: string, the icon class.<br>disabled: boolean, indicate if the icon is disabled.<br>handler: function, the function to process the clicking action on this icon.]
 * @method $this pIconCls(string $iconCls) [The background icon displayed on the textbox.]
 * @method $this pIconAlign(TextBoxAlign $iconAlign) [Position of the icons. Possible values are 'left', 'right'.]
 * @method $this pIconWidth(int $iconWidth) [The icon width.]
 * @method $this pButtonText(string $buttonText) [The displaying text of button that attached to the textbox.]
 * @method $this pButtonIcon(string $buttonIcon) [The displaying icon of button that attached to the textbox.]
 * @method $this pButtonAlign(TextBoxAlign $buttonAlign) [Position of the button. Possible values are 'left', 'right'.]
 *
 * Event
 * @method $this eOnChange(Js $onChange) [Fires when the field value is changed.]
 * @method $this eOnResize(Js $onResize) [Fires when the textbox is resized.]
 * @method $this eOnClickButton(Js $onClickButton) [Fires when the user click the button.]
 * @method $this eOnClickIcon(Js $onClickIcon) [Fires when the user click a icon.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mTextbox() [Return the textbox object. The user can bind any events to this editing box.]
 * @method $this mButton() [Return the button object.]
 * @method $this mDestroy() [Destroy the textbox component.]
 * @method $this mResize(int $resize) [Resize the component width.]
 * @method $this mDisable() [Disable the component.]
 * @method $this mEnable() [Enable the component.]
 * @method $this mReadonly(bool $mode = true) [Enable/Disable 'readonly' mode.]
 * @method $this mSetEditable(bool $mode = true) [Set the editable mode for the textbox component.]
 * @method $this mClear() [Clear the component value.]
 * @method $this mReset() [Reset the component value.]
 * @method $this mInitValue($value) [Initialize the component value. Calling this method does not trigger the 'onChange' event.]
 * @method $this mSetText($text) [Set the displaying text value.]
 * @method $this mGetText() [Get the displaying text value.]
 * @method $this mSetValue($value) [Set the component value.]
 * @method $this mGetValue() [Get the component value.]
 * @method $this mGetIcon($index) [Get specified icon object.]
 */
class TextBox extends ValidateBox
{
    public const string COMPONENT_NAME = 'textbox';
}