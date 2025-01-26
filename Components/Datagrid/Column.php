<?php

namespace Easyui\Components\Datagrid;

use Easyui\Enums\DatagridColumnAlign;
use Easyui\Enums\DatagridSortOrder;
use Easyui\Js;
use Easyui\Options;

/**
 * @method $this title(string $title) [The column title text.]
 * @method $this field(string $field) [The column field name.]
 * @method $this width(int $width) [The width of column. If not defined, the width will auto expand to fit its contents. No width definition will reduce performance.]
 * @method $this rowspan(int $rowspan) [Indicate how many rows a cell should take up.]
 * @method $this colspan(int $colspan) [Indicate how many columns a cell should take up.]
 * @method $this align(DatagridColumnAlign $align) [Indicate how to align the column data. 'left', 'right', 'center' can be used.]
 * @method $this halign(DatagridColumnAlign $halign) [Indicate how to align the column header. Possible values are: 'left', 'right', 'center'. If not assigned, the header alignment is same as data alignment defined via 'align' property.]
 * @method $this sortable(bool $sortable) [True to allow the column can be sorted.]
 * @method $this order(DatagridSortOrder $order) [The default sort order, can only be 'asc' or 'desc'.]
 * @method $this resizable(bool $resizable) [True to allow the column can be resized.]
 * @method $this fixed(bool $fixed) [True to prevent from adjusting width when 'fitColumns' is set to true.]
 * @method $this hidden(bool $hidden) [True to hide the column.]
 * @method $this checkbox(bool $checkbox) [True to show a checkbox. The checkbox column has fixed width.]
 * @method $this formatter(Js $formatter) [The cell formatter function, takes three parameters:<br>value: the field value.<br>rowData: the row record data.<br>rowIndex: the row index.]
 * @method $this styler(Js $styler) [The cell styler function, return style string to custom the cell style such as 'background:red'. The function takes three parameters:<br>value: the field value.<br>rowData: the row record data.<br>rowIndex: the row index.]
 * @method $this hformatter(Js $hformatter) [The header cell formatter function, takes two parameters:<br>title: the column title.<br>col: the column object.]
 * @method $this hstyler(Js $hstyler) [The header cell styler function, return style string or object to the header cell. The function takes two parameters:<br>title: the column title.<br>col: the column object.]
 * @method $this sorter(Js $sorter) [The custom field sort function that used to do local sorting, take two parameters:<br>a: the first field value.<br>b: the second field value.]
 * @method $this editor($editor) [Indicate the edit type. When string indicates the edit type, when object contains two properties:<br>type: string, the edit type, possible types are: text, textbox, numberbox, numberspinner, combobox, combotree, combogrid, datebox, datetimebox, timespinner, datetimespinner, textarea, checkbox, validatebox.<br>options: object, the editor options corresponding to the edit type.]
 */
class Column extends Options
{
}