<?php

namespace Easyui\Components;

use Easyui\Js;

/**
 * Property/Params
 * @method $this pShowGroup(bool $showGroup) [Defines if to show property group.]
 * @method $this pGroupField(string $groupField) [Defines the group field name.]
 * @method $this pGroupFormatter(Js $groupFormatter) [Defines how to format the group value. This function takes following parameters:<br>group: the group field value.<br>rows: the rows belong to its group.]
 *
 * Event
 *
 * Method
 * @method $this mGroups() [Return all the groups, each group contains the following properties:<br>value: the group field value.<br>rows: the rows that belong to the group.<br>startIndex: the start index in all the rows.]
 * @method $this mExpandGroup($groupIndex) [Expand specified group. If the 'groupIndex' parameter is not assigned, expand all group.]
 * @method $this mCollapseGroup($groupIndex) [Collapse specified group. If the 'groupIndex' parameter is not assigned, collapse all group.]
 */
class PropertyGrid extends Datagrid
{
    public const string COMPONENT_NAME = 'propertygrid';
}