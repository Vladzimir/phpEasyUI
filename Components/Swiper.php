<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [Set the swiper width.]
 * @method $this pHeight(int $height) [Set the swiper height.]
 * @method $this pSelected(int $selected) [The index of current active slide panel.]
 * @method $this pDuration(int $duration) [The duration(in ms) to navigate to another slide panel.]
 * @method $this pAutoplay(bool $autoplay) [True to play the swiper automatically.]
 * @method $this pInterval(int $interval) [The time interval to play the slide panels. This property is only valid when autoplay is set to true.]
 * @method $this pIndicator(bool $indicator) [Define if to display the indicator.]
 *
 * Event
 * @method $this eOnChange(Js $onChange) [Fires when the active slide panel is changed.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mResize($param) [Resize the swiper layout.]
 * @method $this mNavNext() [Navigate to the next slide panel.]
 * @method $this mNavPrev() [Navigate to the previous slide panel.]
 */
class Swiper extends Component
{
    public const string COMPONENT_NAME = 'swiper';
}