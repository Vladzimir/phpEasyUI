<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pWidth(int $width) [Set the component width.]
 * @method $this pHeight(int $height) [Set the component height.]
 * @method $this pData(array $data) [The data to be loaded.]
 * @method $this pDotStyler(Js $dotStyler) [Return the styles of the dot indicator.]
 * @method $this pDotFormatter(Js $dotFormatter) [Return the content of the dot indicator.]
 * @method $this pFormatter(Js $formatter) [Return the item content of the line.]
 *
 * Event
 * @method $this eOnClick(Js $onClick) [Fires when the line is clicked.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mLoadData($data) [Load the data to display lines.]
 */
class TimeLine extends Component
{
    public const string COMPONENT_NAME = 'timeline';
}