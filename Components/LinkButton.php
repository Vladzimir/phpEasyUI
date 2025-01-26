<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\LinkButtonIconAlign;
use Easyui\Enums\LinkButtonSize;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [The width of this component.]
 * @method $this pHeight(int $height) [The height of this component.]
 * @method $this pId(string $id) [The id attribute of this component.]
 * @method $this pDisabled(bool $disabled) [True to disable the button]
 * @method $this pToggle(bool $toggle) [True to enable the user to switch its state to selected or unselected.]
 * @method $this pSelected(bool $selected) [Defines if the button's state is selected.]
 * @method $this pGroup(string $group) [The group name that indicates what buttons belong to.]
 * @method $this pPlain(bool $plain) [True to show a plain effect.]
 * @method $this pText(string $text) [The button text.]
 * @method $this pIconCls(string $iconCls) [A CSS class to display a 16x16 icon on left.]
 * @method $this pIconAlign(LinkButtonIconAlign $iconAlign) [Position of the button icon. Possible values are: 'left', 'right', 'top', 'bottom'.]
 * @method $this pSize(LinkButtonSize $size) [The button size. Possible values are: 'small', 'large'.]
 *
 * Event
 * @method $this eOnClick(Js $onClick) [Fires when click the button.]
 *
 * Method
 * @method $this mOptions() [Return options property.]
 * @method $this mResize($param) [Resize the button.]
 * @method $this mDisable() [Disable the button.]
 * @method $this mEnable() [Enable the button.]
 * @method $this mSelect() [Select the button.]
 * @method $this mUnselect() [Unselect the button.]
 */
class LinkButton extends Component
{
    public const string COMPONENT_NAME = 'linkbutton';
}