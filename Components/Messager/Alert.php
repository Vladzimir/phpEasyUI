<?php

namespace Easyui\Components\Messager;

use Easyui\Enums\MessagerAlertIcon;
use Easyui\Js;
use Easyui\Options;

/**
 * @method $this title(string|Js $title) [The title text to be showed on header panel.]
 * @method $this msg(string|Js $msg) [The message text to be showed.]
 * @method $this icon(MessagerAlertIcon $icon) [The icon image to be showed. Available value are: error, question, info, warning.]
 * @method $this fn(Js $fn) [The callback function triggered when clicking on the OK button.]
 */
class Alert extends Options
{
}