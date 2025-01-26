<?php

namespace Easyui\Components;

use Easyui\Js;

/**
 * Property/Params
 * @method $this pLines(bool $lines) [Defines if to display the row lines.]
 * @method $this pCheckbox(bool $checkbox) [Defines if to display checkbox for each rows.]
 * @method $this pValueField(string $valueField) [The field value name to bind to the row.]
 * @method $this pTextField(string $textField) [The field name to display on the row.]
 * @method $this pGroupField(string $groupField) [Indicate what field to be grouped.]
 * @method $this pTextFormatter(Js $textFormatter) [The text field formater function, takes three parameters:<br>value: the field value.<br>row: the row record data.<br>index: the row index.]
 * @method $this pGroupFormatter(Js $groupFormatter) [The formatter function to return the group content, takes two parameters:<br>value: the group value defined by 'groupField' property.<br>rows: the data rows according to the specified group value.]
 *
 * Event
 *
 * Method
 */
class DataList extends DataGrid
{
    public const string COMPONENT_NAME = 'datalist';
}