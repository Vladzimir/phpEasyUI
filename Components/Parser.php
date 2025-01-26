<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pAuto(bool $auto) [Defines if to auto parse the easyui component.]
 *
 * Event
 * @method $this eOnComplete(Js $onComplete) [Fires when parser finishing its parse action.]
 *
 * Method
 * @method $this mParse($context) [Parse the easyui component.]
 */
class Parser extends Component
{
    public const string COMPONENT_NAME = 'parser';
}