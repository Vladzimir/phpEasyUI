<?php

namespace Easyui\Components;

/**
 * Property/Params
 * @method $this pToolbar(array|string $toolbar) [The top toolbar of dialog, possible values:<br>1) an array, each tool options are same as linkbutton.<br>2) a selector that indicating the toolbar.]
 * @method $this pButtons(array|string $buttons) [The bottom buttons of dialog, possible values:<br>1) an array, each button options is same as linkbutton.<br>2) a selector that indicating the button bar.]
 *
 * Event
 *
 * Method
 * @method $this mDialog() [Return the outer dialog object.]
 */
class Dialog extends Window
{
    public const string COMPONENT_NAME = 'dialog';
}