<?php

namespace Easyui\Extensions;

use Easyui\Components\DataGrid;
use Easyui\Enums\Extensions\DatagridFilterFilterBtnPosition;
use Easyui\Enums\Extensions\DatagridFilterFilterMatchingType;
use Easyui\Enums\Extensions\DatagridFilterFilterPosition;
use Easyui\Extensions\DatagridFilter\FilterRules;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pFilterMenuIconCls(string|Js $filterMenuIconCls) [The icon class of filter menu item to indicate what item is used.]
 * @method $this pFilterBtnIconCls(string|Js $filterBtnIconCls) [The icon class of filter button.]
 * @method $this pFilterBtnPosition(string|DatagridFilterFilterBtnPosition $filterBtnPosition) [The filter button position. Possible values are 'left' and 'right'.]
 * @method $this pFilterPosition(string|DatagridFilterFilterPosition $filterPosition) [The filter bar position accordion to columns. Possible values are 'top' and 'bottom'.]
 * @method $this pShowFilterBar(bool $showFilterBar) [True to display the filter bar.]
 * @method $this pRemoteFilter(bool $remoteFilter) [True to do remote filter. When enabled, the 'filterRules' parameter will be sent to remote server. The 'filterRules' parameter value is achieved by 'filterStringify' function.]
 * @method $this pClientPaging(bool $clientPaging) [True to do paging on the client side.]
 * @method $this pFilterDelay(int $filterDelay) [Delay to do filter from the last key input event in 'text' filter component.]
 * @method $this pFilterRules(array $filterRules) [The definition of filter rules. Each rule contains 'field', 'op' and 'value' properties.]
 * @method $this pFilterMatchingType(string|DatagridFilterFilterMatchingType $filterMatchingType) [Specify whether the filtered rows need to `match` ALL or ANY of the applied filters. Possible values are: 'all', 'any'.]
 * @method $this pFilterIncludingChild(bool $filterIncludingChild) [Determine if to include the child nodes when matching a node.]
 * @method $this pDefaultFilterType(string|Js $defaultFilterType) [The default filter type.]
 * @method $this pDefaultFilterTrigger(string|Js $defaultFilterTrigger) [The event to trigger the filter action.]
 * @method $this pDefaultFilterOperator(string|Js $defaultFilterOperator) [The default filter operator.]
 * @method $this pDefaultFilterOptions(string|Js $defaultFilterOptions) [The default filter options.]
 * @method $this pFilterStringify(Js $filterStringify) [The function to strinify the filter rules.]
 * @method $this pVal(Js $val) [The function to retrieve the field value of a row to `match` the filter rule.]
 *
 * Event
 * @method $this eOnClickMenu(Js $onClickMenu) [Fires when click the menu item, return false to cancel the filtering action.<br>item: The clicked menu item.<br>button: The filter button bound to the filter menu.<br>field: The field name.]
 *
 * Method
 * @method $this mIsFilterEnabled() [true if the current filter is enabled and false if it is disabled.]
 * @method $this mEnableFilter(array|Js $filters) [Create and enable filter functionality. The 'filters' parameter is an array of filter configuration. Each item contains following properties:<br>1) field: the custom rule on.<br>2) type: the filter type, possible values are: label, text, textarea, checkbox, numberbox, validatebox, datebox, combobox, combotree.<br>3) options: the options of the filter type.<br>4) op: the filter operation, possible values are: contains, equal, notequal, beginwith, endwith, less, lessorequal, greater, greaterorequal.]
 * @method $this mDisableFilter() [Disable filter functionality.]
 * @method $this mDestroyFilter() [Destroy the filter bar.]
 * @method $this mGetFilterRule(string $field) [Get the filter rule.]
 * @method $this mAddFilterRule(FilterRules $param) [true if the current filter is enabled and false if it is disabled.]
 * @method $this mRemoveFilterRule($field) [Remove a filter rule. If the 'field' parameter is not specified, remove all the filter rules.]
 * @method $this mDoFilter() [Do the filter based on some filter rules.]
 * @method $this mGetFilterComponent($field) [Get the filter component on a specified field.]
 * @method $this mResizeFilter($field) [Resize the filter component.]
 */
class DatagridFilter extends DataGrid
{

}