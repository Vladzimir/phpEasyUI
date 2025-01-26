<?php

namespace Easyui\Traits;

use Easyui\Enums\SpinnerSpinAlign;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pMin(string $min) [The minimum allowed value.]
 * @method $this pMax(string $max) [The maximum allowed value.]
 * @method $this pIncrement(int $increment) [The increment value when click spinner button.]
 * @method $this pSpinAlign(SpinnerSpinAlign $spinAlign) [Defines the alignment of the spin buttons. Possible values: 'left', 'right', 'horizontal', 'vertical']
 * @method $this pSpin(Js $spin) [A function called when user click the spinner button. The 'down' parameter indicate if the user click the down button.]
 *
 * Event
 * @method $this eOnSpinUp(Js $onSpinUp) [Fires when user click the up spinner button.]
 * @method $this eOnSpinDown(Js $onSpinDown) [Fires when user click the down spinner button.]
 *
 * Method
 */
trait Spinner
{

}