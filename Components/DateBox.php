<?php

namespace Easyui\Components;

use Easyui\Js;

/**
 * Property/Params
 * @method $this pCurrentText(string $currentText) [The text to display for the current day button.]
 * @method $this pCloseText(string $closeText) [The text to display for the close button.]
 * @method $this pOkText(string $okText) [The text to display for the ok button, reserved for datetimebox plugin.]
 * @method $this pButtons(array $buttons) [The buttons underneath the calendar.]
 * @method $this pSharedCalendar(string $sharedCalendar) [The shared calendar used by multiple datebox components.]
 * @method $this pFormatter(Js $formatter) [A function to format the date, the function take a 'date' parameter and return a string value.]
 * @method $this pParser(Js $parser) [A function to parse a date string, the function take a 'date' string and return a date value.]
 *
 * Event
 * @method $this eOnSelect(Js $onSelect) [Fires when user select a date.]
 *
 * Method
 * @method $this mCalendar() [Get the calendar object.]
 * @method $this mCloneFrom($from) [Clone the datebox from a source datebox.]
 */
class DateBox extends Combo
{
    public const string COMPONENT_NAME = 'datebox';
}