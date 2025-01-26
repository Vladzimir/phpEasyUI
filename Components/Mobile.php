<?php

namespace Easyui\Components;

use Easyui\Component;

/**
 * Property/Params
 * @method $this pAnimation(string $animation) [The animation type when navigating panels.]
 * @method $this pDirection(string $direction) [The animation direction.]
 *
 * Event
 *
 * Method
 * @method $this mInit() [Initialize the mobile panels.]
 * @method $this mNav($nav) [Navigate the panel from one to another.]
 * @method $this mGo($go) [Navigate to the specified panel.]
 * @method $this mBack() []
 */
class Mobile extends Component
{
    public const string COMPONENT_NAME = 'mobile';
}