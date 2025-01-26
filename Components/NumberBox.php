<?php

namespace Easyui\Components;

use Easyui\Js;

/**
 * Property/Params
 * @method $this pMin(int $min) [The minimum allowed value.]
 * @method $this pMax(int $max) [The maximum allowed value.]
 * @method $this pPrecision(int $precision) [The maximum precision to display after the decimal separator.]
 * @method $this pDecimalSeparator(string $decimalSeparator) [The decimal character separates the integer and decimal parts of a number.]
 * @method $this pGroupSeparator(string $groupSeparator) [The character that separates integer groups to show thousands and millions.]
 * @method $this pPrefix(string $prefix) [The prefix string.]
 * @method $this pSuffix(string $suffix) [The suffix string.]
 * @method $this pFilter(Js $filter) [Defines how to filter the key pressed, return true to accept the inputed char.]
 * @method $this pFormatter(Js $formatter) [A function to format the numberbox value. Return string value that will display on box.]
 * @method $this pParser(Js $parser) [A function to parse a string. Return numberbox value.]
 *
 * Event
 *
 * Method
 * @method $this mFix() [Fix the value to valid value.]
 */
class NumberBox extends TextBox
{
    public const string COMPONENT_NAME = 'numberbox';
}