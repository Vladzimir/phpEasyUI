<?php

namespace Easyui\Traits;

use Easyui\Enums\TreeGetChecked;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pUrl(string $url) [a URL to retrieve remote data.]
 * @method $this pMethod(string $method) [The http method to retrieve data.]
 * @method $this pAnimate(bool $animate) [Defines if to show animation effect when node expand or collapse.]
 * @method $this pCheckbox(bool|Js $checkbox) [Defines if to show the checkbox before every node. If a function is specified, return true to show the checkbox.]
 * @method $this pCascadeCheck(bool $cascadeCheck) [Defines if to cascade check.]
 * @method $this pOnlyLeafCheck(bool $onlyLeafCheck) [Defines if to show the checkbox only before leaf node.]
 * @method $this pLines(bool $lines) [Defines if to show lines between tree nodes.]
 * @method $this pDnd(bool $dnd) [Defines if to enable drag and drop.]
 * @method $this pData(array $data) [The node data to be loaded.]
 * @method $this pQueryParams($queryParams) []
 * @method $this pFormatter(Js $formatter) [Defines how to render the node's text.]
 * @method $this pFilter(Js $filter) [Defines how to filter the local tree data, return true to allow the node to be displayed.]
 * @method $this pLoader(Js $loader) [Defines how to load data from remote server. Return false can abort this action. This function takes the following parameters:<br>param: the parameter object to pass to remote server.<br>success(data): the callback function that will be called when retrieve data successfully.<br>error(): the callback function that will be called when failed to retrieve data.]
 * @method $this pLoadFilter(Js $loadFilter) [Return the filtered data to display. The returned data is in standard tree format. This function takes the following parameters:<br>data: the original data to be loaded.<br>parent: DOM object, indicate the parent node.]
 *
 * Event
 * @method $this eOnClick(Js $onClick) [Fires when user click a node.]
 * @method $this eOnDblClick(Js $onDblClick) [Fires when user dblclick a node.]
 * @method $this eOnBeforeLoad(Js $onBeforeLoad) [Fires before a request is made to load data, return false to cancel this load action.]
 * @method $this eOnLoadSuccess(Js $onLoadSuccess) [Fires when data loaded successfully.]
 * @method $this eOnLoadError(Js $onLoadError) [Fires when data loaded fail, the arguments parameter is same as the 'error' function of jQuery.ajax.]
 * @method $this eOnBeforeExpand(Js $onBeforeExpand) [Fires before node is expanded, return false to cancel this expand action.]
 * @method $this eOnExpand(Js $onExpand) [Fires when node is expanded.]
 * @method $this eOnBeforeCollapse(Js $onBeforeCollapse) [Fires before node is collapsed, return false to cancel this collapse action.]
 * @method $this eOnCollapse(Js $onCollapse) [Fires when node is collapsed.]
 * @method $this eOnBeforeCheck(Js $onBeforeCheck) [Fires before users click the checkbox, return false to cancel this check action.]
 * @method $this eOnCheck(Js $onCheck) [Fires when users click the checkbox.]
 * @method $this eOnBeforeSelect(Js $onBeforeSelect) [Fires before node is selected, return false to cancel this select action.]
 * @method $this eOnSelect(Js $onSelect) [Fires when node is selected.]
 * @method $this eOnContextMenu(Js $onContextMenu) [Fires when node is right clicked.]
 * @method $this eOnBeforeDrag(Js $onBeforeDrag) [Fires when a node's dragging starts, return false to deny drag.]
 * @method $this eOnStartDrag(Js $onStartDrag) [Fires when start dragging a node.]
 * @method $this eOnStopDrag(Js $onStopDrag) [Fires after stop dragging a node.]
 * @method $this eOnDragEnter(Js $onDragEnter) [Fires when a node is dragged enter some target node that can be dropped to. return false to deny drop.<br>target: the target node element to be dropped.<br>source: the source node being dragged.]
 * @method $this eOnDragOver(Js $onDragOver) [Fires when a node is dragged over some target node that can be dropped to, return false to deny drop.<br>target: the target node element to be dropped.<br>source: the source node being dragged.]
 * @method $this eOnDragLeave(Js $onDragLeave) [Fires when a node is dragged leave some target node that can be dropped to.<br>target: the target node element to be dropped.<br>source: the source node being dragged.]
 * @method $this eOnBeforeDrop(Js $onBeforeDrop) [Fires before a node is dropped, return false to deny drop.<br>target: DOM object, The node being targeted for the drop.<br>source: the source node.<br>point: indicate the drop operation, posible values are: 'append', 'top' or 'bottom'.]
 * @method $this eOnDrop(Js $onDrop) [Fires when a node is dropped.<br>target: DOM object, The node being targeted for the drop.<br>source: the source node.<br>point: indicate the drop operation, posible values are: 'append', 'top' or 'bottom'.]
 * @method $this eOnBeforeEdit(Js $onBeforeEdit) [Fires before edit node.]
 * @method $this eOnAfterEdit(Js $onAfterEdit) [Fires after edit node.]
 * @method $this eOnCancelEdit(Js $onCancelEdit) [Fires when cancel the editing action.]
 *
 * Method
 * @method $this mOptions() [Return the options of tree.]
 * @method $this mLoadData($data) [Load the tree data.]
 * @method $this mGetNode($target) [get the specified node object.]
 * @method $this mGetData($target) [get the specified node data, including its children.]
 * @method $this mReload($target) [Reload tree data.]
 * @method $this mGetRoot() [Get the root node, return node object]
 * @method $this mGetRoots() [Get the root nodes, return node array.]
 * @method $this mGetParent($target) [Get the parent node, the target parameter indicate the node DOM object.]
 * @method $this mGetChildren($target) [Get the children nodes, the target parameter indicate the node DOM object.]
 * @method $this mGetChecked(TreeGetChecked|array $state) [Get the checked nodes. The state available values are: 'checked', 'unchecked', 'indeterminate'. If the state is not assigned, return the 'checked' nodes.]
 * @method $this mGetSelected() [Get the selected node and return it, if no node selected return null.]
 * @method $this mIsLeaf($target) [Determine the specified node is leaf, the target parameter indicate the node DOM object.]
 * @method $this mFind($param) [Find the specifed node and return the node object.]
 * @method $this mFindBy($param) [Find the specifed node by field.]
 * @method $this mSelect($target) [Select a node, the target parameter indicate the node DOM object.]
 * @method $this mCheck($target) [Set the specified node to checked.]
 * @method $this mUncheck($target) [Set the specified node to unchecked.]
 * @method $this mCollapse($target) [Collapse a node, the target parameter indicate the node DOM object.]
 * @method $this mExpand($target) [Expand a node, the target parameter indicate the node DOM object. When node is closed and has no child nodes, the node id value(named as 'id' parameter) will be sent to server to request child nodes data.]
 * @method $this mCollapseAll($target) [Collapse all nodes.]
 * @method $this mExpandAll($target) [Expand all nodes.]
 * @method $this mExpandTo($target) [Expand from root to specified node.]
 * @method $this mScrollTo($target) [Scroll to the specified node.]
 * @method $this mAppend($param) [Append some children nodes to a parent node. param parameter has two properties:<br>parent: DOM object, the parent node to append to, if not assigned, append as root nodes.<br>data: array, the nodes data.]
 * @method $this mToggle($target) [Toggles expanded/collapsed state of the node, the target parameter indicate the node DOM object.]
 * @method $this mInsert($param) [Insert a node to before or after specified node. the 'param' parameter contains following properties:<br>before: DOM object, the node to insert before.<br>after: DOM object, the node to insert after]
 * @method $this mRemove($target) [Remove a node and it's children nodes, the target parameter indicate the node DOM object.]
 * @method $this mPop($target) [Pop a node and it's children nodes, the method is same as remove but return the removed node data.]
 * @method $this mUpdate($param) [Update the specified node. The 'param' parameter has following properties:
 * target(DOM object, the node to be updated),id,text,iconCls,checked,etc.]
 * @method $this mEnableDnd() [Enable drag and drop feature.]
 * @method $this mDisableDnd() [Disable drag and drop feature.]
 * @method $this mBeginEdit($target) [Begin editing a node.]
 * @method $this mEndEdit($target) [End editing a node.]
 * @method $this mCancelEdit($target) [Cancel editing a node.]
 * @method $this mDoFilter($text) [Do the filter action.]
 */
trait Tree
{

}