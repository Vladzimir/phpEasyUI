<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\ComboBoxGroupPosition;
use Easyui\Enums\ComboBoxMode;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pValueField(string $valueField) [The underlying data value name to bind to this ComboBox.]
 * @method $this pTextField(string $textField) [The underlying data field name to bind to this ComboBox.]
 * @method $this pGroupField(string $groupField) [Indicate what field to be grouped.]
 * @method $this pGroupFormatter(Js $groupFormatter) [return group text to display on group item.]
 * @method $this pMode(ComboBoxMode $mode) [Defines how to load list data when text changed. Set to 'remote' if the combobox loads from server. When set to 'remote' mode, what the user types will be sent as the http request parameter named 'q' to server to retrieve the new data.]
 * @method $this pUrl(string $url) [A URL to load list data from remote.]
 * @method $this pMethod(string $method) [The http method to retrieve data.]
 * @method $this pData(array $data) [The list data to be loaded.]
 * @method $this pQueryParams($queryParams) [The additional parameters that will be sent to server when requesting remote data.]
 * @method $this pLimitToList(bool $limitToList) [True to limit the inputed values to the listed items.]
 * @method $this pShowItemIcon(bool $showItemIcon) [True to display icon of the selected item on the textbox.]
 * @method $this pGroupPosition(ComboBoxGroupPosition $groupPosition) [The item group position, possible values are: 'static' and 'sticky'. Set this property to 'sticky' to stick the item group to the top of drop-down panel.]
 * @method $this pFilter(Js $filter) [Defines how to filter the local data when 'mode' is set to 'local'. The function takes two parameters:<br>q: the user typed text.<br>row: the list row data.<br>Return true to allow the row to be displayed.]
 * @method $this pFormatter(Js $formatter) [Defineds how to render the row. The function takes one parameter: row.]
 * @method $this pLoader(Js $loader) [Defines how to load data from remote server. Return false can abort this action. This function takes following parameters:<br>param: the parameter object to pass to remote server.<br>success(data): the callback function that will be called when retrieve data successfully.<br>error(): the callback function that will be called when failed to retrieve data.]
 * @method $this pLoadFilter(Js $loadFilter) [Return the filtered data to display.]
 *
 * Event
 * @method $this eOnBeforeLoad(Js $onBeforeLoad) [Fires before a request is made to load data, return false to cancel this load action.]
 * @method $this eOnLoadSuccess(Js $onLoadSuccess) [Fires when remote data is loaded successfully.]
 * @method $this eOnLoadError(Js $onLoadError) [Fires when an error occurs during loading remote data.]
 * @method $this eOnClick(Js $onClick) [Fires when the user clicks a list item.]
 * @method $this eOnSelect(Js $onSelect) [Fires when the user selects a list item.]
 * @method $this eOnUnselect(Js $onUnselect) [Fires when the user unselects a list item.]
 *
 * Method
 * @method $this mGetData() [Return the loaded data.]
 * @method $this mLoadData($data) [Load the locale list data.]
 * @method $this mReload(string $url = null) [Request the remote list data. Pass the 'url' parameter to override the original URL value.]
 * @method $this mSelect($value) [Select the specified item.]
 * @method $this mUnselect($value) [Unselect the specified item.]
 * @method $this mScrollTo($value) [Scroll to the specified item in the drop-down list.]
 */
class ComboBox extends Combo
{
    public const string COMPONENT_NAME = 'combobox';
}