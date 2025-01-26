<?php

namespace Easyui\Components;

use Easyui\Components\Messager\Alert;
use Easyui\Components\Messager\Confirm;
use Easyui\Components\Messager\Progress;
use Easyui\Components\Messager\Prompt;
use Easyui\Components\Messager\Show;
use Easyui\Enums\MessagerProgressMethod;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pOk(string $ok) [The Ok button text.]
 * @method $this pCancel(string $cancel) [The Cancel button text.]
 * @method $this pMsg(string $msg) [The message to display on the dialog.]
 * @method $this pFn(Js $fn) [The callback function when clicking on the OK or CANCEL buttons.]
 *
 * Event
 *
 * Method
 * @method $this mShow(Show $options) [Show a message window on right bottom of screen. The options parameter is a configuration object:<br>showType: Defines how the message window to be showed. Available values are: null, slide, fade, show. Defaults to slide.<br>showSpeed: Defines the time in milliseconds message window finishs show. Defaults to 600.<br>width: Defines the width of message window. Defaults to 250.<br>height: Defines the height of message window. Defaults to 100.<br>title: The title text to be showed on header panel.<br>msg: The message text to be showed.<br>style: Defines the custom style for message window.<br>timeout: If defines to 0, the message window will not close unless user close it. Defines to unzero, the message window will be auto closed when timeout. Defaults to 4 seconds.]
 * @method $this mAlert(Alert $alert) [Show an alert window. Parameters:<br>title: The title text to be showed on header panel.<br>msg: The message text to be showed.<br>icon: The icon image to be showed. Available value are: error, question, info, warning.<br>fn: The callback function triggered when clicking on the OK button.<br>The configuration object can be passed to the function argument.]
 * @method $this mConfirm(Confirm $confirm) [Show a confirmation message window with Ok and Cancel buttons. Parameters:<br>title: The title text to be showed on header panel.<br>msg: The message text to be showed.<br>fn(b): The callback function, when user click Ok button, pass a true value to function, otherwise pass a false to it.<br>The configuration object can be passed to the function argument.]
 * @method $this mPrompt(Prompt $prompt) [Show a message window with Ok and Cancel buttons prompting user to enter some text. Parameters:<br>title: The title text to be showed on header panel.<br>msg: The message text to be showed.<br>fn(val): The callback function with a value parameter user entered.<br>The configuration object can be passed to the function argument.]
 * @method $this mProgress(null|MessagerProgressMethod|Progress $progress) [Show a progress message window.<br>The options is defined as:<br>title: The title text to be showed on header panel, default ''.<br>msg: The message box body text, default ''.<br>text: The text to display in the progress bar, default undefined.<br>interval: The length of time in milliseconds between each progress update, default 300.<br><br>The method is defined as:<br>bar: Get the progressbar object.<br>close: Close the progress window.]
 */
class Messager extends Dialog
{
    public const string COMPONENT_NAME = 'messager';
}