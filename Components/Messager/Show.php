<?php

namespace Easyui\Components\Messager;

use Easyui\Enums\MessagerShowType;
use Easyui\Options;

/**
 * @method $this showType(null|MessagerShowType $showType) [Defines how the message window to be showed. Available values are: null, slide, fade, show. Defaults to slide.]
 * @method $this showSpeed(int $showSpeed) [Defines the time in milliseconds message window finishes show. Defaults to 600.]
 * @method $this width(int $width) [Defines the width of message window. Defaults to 250.]
 * @method $this height(int $height) [Defines the height of message window. Defaults to 100.]
 * @method $this title(string $title) [The title text to be showed on header panel.]
 * @method $this msg(string $msg) [The message text to be showed.]
 * @method $this style(string $style) [Defines the custom style for message window.]
 * @method $this timeout(int $timeout) [If defines to 0, the message window will not close unless user close it. Defines to unzero, the message window will be auto closed when timeout. Defaults to 4 seconds.]
 */
class Show extends Options
{
}