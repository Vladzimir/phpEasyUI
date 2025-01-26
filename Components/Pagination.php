<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Components\Pagination\Layout;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pTotal(int $total) [The total records, which should be setted when pagination is created.]
 * @method $this pPageSize(int $pageSize) [The page size.]
 * @method $this pPageNumber(int $pageNumber) [Show the page number when pagination is created.]
 * @method $this pPageList(array $pageList) [User can change the page size. The pageList property defines how many size can be changed.]
 * @method $this pLoading(bool $loading) [Defines if data is loading.]
 * @method $this pButtons(string|array $buttons) [Defines custom buttons, possible values:<br>1) an array, each button contains two properties:<br>iconCls: the CSS class which will show a background image<br>handler: a handler function when button is clicked<br>2) a selector that indicating the buttons.]
 * @method $this pLayout(array|Layout $layout) [The pagination layout definition.<br>The layout item contains one or more following values:<br>1) list: the page size list.<br>2) sep: the page button separator.<br>3) first: the first button.<br>4) prev: the prev button.<br>5) next: the next button.<br>6) last: the last button.<br>7) refresh: the refresh button.<br>8) manual: the manual page input to allow entering page number.<br>9) links: the page number links.<br>10) info: the page information.]
 * @method $this pLinks(int $links) [The links amount, it is valid only when the 'links' item is included in 'layout'.]
 * @method $this pShowPageList(bool $showPageList) [Defines if to show page list.]
 * @method $this pShowRefresh(bool $showRefresh) [Defines if to show refresh button.]
 * @method $this pShowPageInfo(bool $showPageInfo) [Defines if to show page information.]
 * @method $this pBeforePageText(string $beforePageText) [Show a label before the input component.]
 * @method $this pAfterPageText(string $afterPageText) [Show a label after the input component.]
 * @method $this pDisplayMsg(string $displayMsg) [Display a page information.]
 *
 * Event
 * @method $this eOnSelectPage(Js $onSelectPage) [Fires when user select a new page. callback function contains two parameter:<br>pageNumber: the new page number<br>pageSize: the new page size]
 * @method $this eOnBeforeRefresh(Js $onBeforeRefresh) [Fires before the refresh button is clicked, return false to cancel the refresh action.]
 * @method $this eOnRefresh(Js $onRefresh) [Fires after refresh.]
 * @method $this eOnChangePageSize(Js $onChangePageSize) [Fires when user change the page size.]
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mLoading() [Make the pagination to become loading status.]
 * @method $this mLoaded() [Make the pagination to become loaded status.]
 * @method $this mRefresh($options) [Refresh and display pager information.]
 * @method $this mSelect($page) [Select a new page. The page index start with 1.]
 */
class Pagination extends Component
{
    public const string COMPONENT_NAME = 'pagination';
}