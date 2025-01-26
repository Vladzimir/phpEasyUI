<?php

namespace Easyui\Components;

use Easyui\Js;

/**
 * Property/Params
 * @method $this pTagFormatter(Js $tagFormatter) [The function to return the formatted value.]
 * @method $this pTagStyler(Js $tagStyler) [The tag styler function, return style string to custom the tag style such as 'background:red'.]
 *
 * Event
 * @method $this eOnClickTag(Js $onClickTag) [Fires when the tag is clicked.]
 * @method $this eOnBeforeRemoveTag(Js $onBeforeRemoveTag) [Fires before removing a tag, return false to deny the action.]
 * @method $this eOnRemoveTag(Js $onRemoveTag) [Fires when the user removes a tag.]
 *
 * Method
 */
class TagBox extends ComboBox
{
    public const string COMPONENT_NAME = 'tagbox';
}