<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\LayoutRegion;
use Easyui\Enums\LayoutPanelRegion;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pFit(bool $fit) [Set to true to set the layout size fit its parent container. When creating layout on 'body' tag, it will be auto maximized to the full size of whole page.]
 * @method $this p() []
 *
 * Event
 * @method $this eOnCollapse(Js $onCollapse) [Fires when collapse a region panel.]
 * @method $this eonExpand(Js $onExpand) [Fires when expand a region panel.]
 * @method $this eOnAdd(Js $onAdd) [Fires when add a new region panel.]
 * @method $this eOnRemove(Js $onRemove) [Fires when remove a region panel.]
 *
 * Method
 * @method $this mResize($param) [Set the layout size. The 'param' object has following properties:<br>width: the layout width.<br>height: the layout height.]
 * @method $this mPanel(LayoutPanelRegion $region) [Return the specified panel, the 'region' parameter possible values:'north', 'south', 'east', 'west', 'center'.]
 * @method $this mCollapse(LayoutRegion $region) [Collapse the specified panel, the 'region' parameter possible values:'north', 'south', 'east', 'west'.]
 * @method $this mExpand(LayoutRegion $region) [Expand the specified panel, the 'region' parameter possible values:'north', 'south', 'east', 'west'.]
 * @method $this mAdd($options) [Add a specified panel, the options parameter is a config object, see tab panel properties for more details.]
 * @method $this mRemove(LayoutRegion $region) [Remove the specified panel, the 'region' parameter possible values:'north', 'south', 'east', 'west'.]
 * @method $this mSplit($region) [Split the region panel.]
 * @method $this mUnsplit($region) [Unsplit the region panel.]
 * @method $this mStopCollapsing() [Stop collapsing the region panel.]
 */
class Layout extends Component
{
    public const string COMPONENT_NAME = 'layout';
}