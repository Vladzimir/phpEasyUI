<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\ComboGridMode;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pTextField(string $textField) [The text field to be displayed in textbox.]
 * @method $this pMode(ComboGridMode $mode) [Defines how to load datagrid data when text changed. Set to 'remote' if the combogrid loads from server. When set to 'remote' mode, what the user types will be sent as the http request parameter named 'q' to server to retrieve the new data.]
 * @method $this pFilter(Js $filter) [Defines how to select the local data when 'mode' is set to 'local'. Return true to select the row.]
 *
 * Event
 *
 * Method
 * @method $this mGrid() [Return the datagrid object.]
 * @method $this mSetValue($value) [Set the component value.]
 * @method $this mClear() [Clear the component value.]
 */
class ComboGrid extends Component
{
    public const string COMPONENT_NAME = 'combogrid';
    use \Easyui\Traits\Combo;
    use \Easyui\Traits\DataGrid;
}