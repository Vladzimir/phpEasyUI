<?php

namespace Easyui\Components;

/**
 * Property/Params
 * @method $this pSpinnerWidth(int $spinnerWidth) [The width of the timespinner component that embed in the datetimebox.]
 * @method $this pShowSeconds(bool $showSeconds) [Defines if to display the second information.]
 * @method $this pHour12(bool $hour12) [Defines if to display the time in 12 hour format.]
 * @method $this pTimeSeparator(string $timeSeparator) [The time separator between hour and minute and second.]
 *
 * Event
 *
 * Method
 * @method $this mSpinner() [Return the timespinner object.]
 */
class DateTimeBox extends DateBox
{
    public const string COMPONENT_NAME = 'datetimebox';
}