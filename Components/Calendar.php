<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [The width of calendar component.]
 * @method $this pHeight(int $height) [The height of calendar component.]
 * @method $this pFit(bool $fit) [When true to set the calendar size fit it's parent container.]
 * @method $this pBorder(bool $border) [Defines if to show the border.]
 * @method $this pShowWeek(bool $showWeek) [Defines if to show the week numbers.]
 * @method $this pWeekNumberHeader(string $weekNumberHeader) [The label to display on the week number header.]
 * @method $this pGetWeekNumber(Js $getWeekNumber) [The function to return the week number.]
 * @method $this pFirstDay(int $firstDay) [Defines the first day of week. Sunday is 0, Monday is 1, ...]
 * @method $this pWeeks(array $weeks) [The list of week to be showed.]
 * @method $this pMonths(array $months) [The list of month to be showed.]
 * @method $this pYear(int $year) [The year of calendar. The example below shows how to create a calendar using the specified year and month.]
 * @method $this pMonth(int $month) [The month of calendar.]
 * @method $this pCurrent($current) [The day formatter function, return the day value.]
 * @method $this pFormatter(Js $formatter) [The day formatter function, return the day value.]
 * @method $this pStyler(Js $styler) [The styler function for calendar days, return the inline style or CSS class.]
 * @method $this pValidator(Js $validator) [The validator function that is used to determine if a calendar day can be selected, return false to prevent from selecting a day.]
 *
 * Event
 * @method $this eOnSelect(Js $onSelect) [Fires when user select a date.]
 * @method $this eOnChange(Js $onChange) [Fires when change a date.]
 * @method $this eOnNavigate(Js $onNavigate) [Fires when navigate the years and months.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mResize() [Resize the calendar size.]
 * @method $this mMoveTo($date) [Move the calendar to specified date.]
 */
class Calendar extends Component
{
    public const string COMPONENT_NAME = 'calendar';
}