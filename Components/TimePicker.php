<?php

namespace Easyui\Components;

/**
 * Property/Params
 * @method $this pCloseText(string $closeText) [The text to display for the close button.]
 * @method $this pOkText(string $okText) [The text to display for the ok button.]
 * @method $this pAmpm(array $ampm) [The labels for AM and PM buttons.]
 * @method $this pHour24(bool $hour24) [Defines if to display the time in 24 hour format.]
 *
 * Event
 *
 * Method
 */
class TimePicker extends Combo
{
    public const string COMPONENT_NAME = 'timepicker';
}