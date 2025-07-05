<?php

namespace Easyui\Components;

use Easyui\Js;

/**
 * Property/Params
 * @method $this pTreeField(string $treeField) [Defines the tree node field. required.]
 * @method $this pAnimate(bool $animate) [Defines if to show animation effect when node expand or collapse.]
 * @method $this pCheckbox(Js|bool $checkbox) [Defines if to show the checkbox before every row node. If a function is specified, return true to show the checkbox.]
 * @method $this pCascadeCheck(bool $cascadeCheck) [Defines if to cascade check.]
 * @method $this pOnlyLeafCheck(bool $onlyLeafCheck) [Defines if to show the checkbox only before leaf node.]
 * @method $this pLines(bool $lines) [Defines if to show lines between treegrid nodes.]
 *
 * Event
 * @method $this eOnBeforeCheckNode(Js $onBeforeCheckNode) [Fires before the user checks a row node, return false to cancel this action.]
 * @method $this eOnCheckNode(Js $onCheckNode) [Fires when the user checks a row node.]
 * @method $this eOnBeforeExpand(Js $onBeforeExpand) [Fires before a row is expanded, return false to cancel this expand action.]
 * @method $this eOnExpand(Js $onExpand) [Fires when a row is expanded.]
 * @method $this eOnBeforeCollapse(Js $onBeforeCollapse) [Fires before a row is collapsed, return false to cancel this collapse action.]
 * @method $this eOnCollapse(Js $onCollapse) [Fires when a row is collapsed.]
 * @method $this eOnContextMenu(Js $onContextMenu) [Fires when a row is right clicked.]
 *
 * Method
 * @method $this mGetRoot() [Get the root node, return node object]
 * @method $this mGetRoots() [Get the root nodes, return node array.]
 * @method $this mGetParent($id) [Get the parent node.]
 * @method $this mGetChildren($id) [Get the children nodes.]
 * @method $this mGetCheckedNodes() [Get all checked rows.]
 * @method $this mGetLevel($id) [Get the specified node level.]
 * @method $this mFind($id) [Find the specifed node and return the node data.]
 * @method $this mFindBy($param) [Find the specifed node by field.]
 * @method $this mSelect($id) [Select a node.]
 * @method $this mUnselect($id) [Unselect a node.]
 * @method $this mCheckNode($id) [Set the specified row node to checked.]
 * @method $this mUncheckNode($id) [Set the specified row node to unchecked.]
 * @method $this mCollapse($id) [Collapse a node.]
 * @method $this mExpand($id) [Expand a node.]
 * @method $this mCollapseAll($id) [Collapse all nodes.]
 * @method $this mExpandAll($id) [Expand all nodes.]
 * @method $this mExpandTo($id) [Expand from root to specified node.]
 * @method $this mToggle($id) [Toggles expanded/collapsed state of the node.]
 * @method $this mAppend($param) [Append nodes to a parent node. The 'param' parameter contains following properties:<br>parent: the parent node id, if not assigned, append as root nodes.<br>data: array, the nodes data.]
 * @method $this mInsert($param) [Insert a new node to specified node. The 'param' parameter contains following properties:<br>before: the id value of node to insert before.<br>after: the id value of node to insert after.<br>data: the new node data.]
 * @method $this mRemove($id) [Remove a node and it's children nodes.]
 * @method $this mPop($id) [Pop and return a node data including its children after remove that node.]
 * @method $this mRefresh($id) [Refresh the specified node.]
 * @method $this mUpdate($param) [Update the specified node. The param contains following properties:<br>id: the node id that indicate the node to be updated.<br>row: the new row data.]
 * @method $this mShowLines() [Display the treegrid lines.]
 */
class TreeGrid extends Datagrid
{
    public const string COMPONENT_NAME = 'treegrid';
}