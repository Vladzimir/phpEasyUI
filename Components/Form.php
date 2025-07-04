<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pNovalidate(bool $novalidate) [False to validate the form fields.]
 * @method $this pIframe(bool $iframe) [Defines if to submit a form using iframe mode. True to submit the form inside a iframe. False to send the form with ajax.]
 * @method $this pAjax(bool $ajax) [Defines if to submit form with Ajax.]
 * @method $this pDirty(bool $dirty) [Defines if to submit only the changed fields.]
 * @method $this pQueryParams(array $queryParams) [The additional parameters that will be sent to server when posting a form.]
 * @method $this pUrl(string $url) [The form action URL to submit]
 *
 * Event
 * @method $this eOnSubmit(Js $onSubmit) [Fires before submit, return false to prevent submit action.]
 * @method $this eOnProgress(Js $onProgress) [Fires when upload progress data is available. This event does not fires when the 'iframe' property is set to true.]
 * @method $this eSuccess(Js $success) [Fires when the form is submitted successfully.]
 * @method $this eOnBeforeLoad(Js $onBeforeLoad) [Fires before a request is made to load data. Return false to cancel this action.]
 * @method $this eOnLoadSuccess(Js $onLoadSuccess) [Fires when the form data is loaded.]
 * @method $this eOnLoadError(Js $onLoadError) [Fires when some errors occur while loading form data.]
 * @method $this eOnChange(Js $onChange) [Fires when the field values are changed.]
 *
 * Method
 * @method $this mSubmit(string|Js $options) [Do the submit action, the options parameter is an object which contains following properties:<br>url: the action URL<br>onSubmit: callback function before submit<br>success: callback function after submit successfully]
 * @method $this mLoad(array|string $data) [Load records to fill the form. The data parameter can be a string or a object type, when string acts as a remote URL, otherwise acts as a local record.]
 * @method $this mClear() [Clear the form data.]
 * @method $this mReset() [Reset the form data.]
 * @method $this mValidate() [Do the form fields validation, return true when all fields is valid. The method is used with the validatebox plugin.]
 * @method $this mEnableValidation() [Enable validation.]
 * @method $this mDisableValidation() [Disable validation.]
 * @method $this mResetValidation() [Reset validation.]
 * @method $this mResetDirty() [Reset the dirty flag.]
 */
class Form extends Component
{
    public const string COMPONENT_NAME = 'form';
}