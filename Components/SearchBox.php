<?php

namespace Easyui\Components;

use Easyui\Js;

/**
 * Property/Params
 * @method $this pMenu(string $menu) [The search type menu. Each menu item can has below attribute:<br>name: the search type name.<br>selected: current selected search type name.]
 * @method $this pShowEvent(string $showEvent) [The event that cause the menu to appear.]
 * @method $this pHideEvent(string $hideEvent) [The event that cause the menu to disappear.]
 * @method $this pSearcher(Js $searcher) [The searcher function that will be called when user presses the searching button or press ENTER key.]
 *
 * Event
 *
 * Method
 * @method $this mMenu() [Return the search type menu object.]
 * @method $this mGetName() [Return the current searching type name.]
 * @method $this mSelectName($name) [Select the current searching type name.]
 */
class SearchBox extends TextBox
{
    public const string COMPONENT_NAME = 'searchbox';
}