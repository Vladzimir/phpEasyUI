<?php

namespace Easyui\Components;

use Easyui\Js;

/**
 * Property/Params
 * @method $this pSeparator(string $separator) [The separator between hour and minute and second.]
 * @method $this pShowSeconds(bool $showSeconds) [Defines if to show the second information.]
 * @method $this pHour12(bool $hour12) [Defines if to display in 12 hour format.]
 * @method $this pAmpm(array $ampm) [The AM/PM label to display on the inputing box.]
 * @method $this pHighlight(int $highlight) [The field to highlight initially, 0 = hours, 1 = minutes, …]
 * @method $this pFormatter(Js $formatter) [A function to format the date, the function take a 'date' parameter and return a string value.]
 * @method $this pParser(Js $parser) [A function to parse a date string, the function take a 'date' string and return a date value.]
 * @method $this pSelections(array $selections) [The selection parts to highlight the value. Each item indicates the highlight section.]
 *
 * Event
 *
 * Method
 * @method $this mGetHours() [Get the current hour value.]
 * @method $this mGetMinutes() [Get the current minute value.]
 * @method $this mGetSeconds() [Get the current second value.]
 */
class TimeSpinner extends Spinner
{
    public const string COMPONENT_NAME = 'timespinner';
}