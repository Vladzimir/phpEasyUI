<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pAccept(string $accept) [Determine which draggable element will be accepted]
 * @method $this pDisabled(bool $disabled) [True to stop droppable]
 *
 * Event
 * @method $this eOnDragEnter(Js $onDragEnter) [Fires when the draggable element is dragged enter. The source parameter indicate the dragged DOM element.]
 * @method $this eOnDragOver(Js $onDragOver) [Fires when the draggable element is dragged over. The source parameter indicate the dragged DOM element.]
 * @method $this eOnDragLeave(Js $onDragLeave) [Fires when the draggable element is dragged leave. The source parameter indicate the dragged DOM element.]
 * @method $this eOnDrop(Js $onDrop) [Fires when the draggable element is dropped. The source parameter indicate the dragged DOM element.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mEnable() [Enable the droppable functionality.]
 * @method $this mDisable() [Disable the droppable functionality.]
 */
class Droppable extends Component
{
    public const string COMPONENT_NAME = 'droppable';
}