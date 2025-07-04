<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\DrawerRegion;

/**
 * Property/Params
 * @method $this pRegion(DrawerRegion $region) [The region to display the drawer. Possible values are: 'west', 'east'.]
 * @method $this pClosable(bool $closable) [Defines if to show closable button.]
 * @method $this pModal(bool $modal) [Defines if the drawer is a modal drawer.]
 * @method $this pCollapsed(bool $collapsed) [Defines if the drawer is collapsed.]
 *
 * Event
 *
 * Method
 * @method $this mOptions() [Return the options object.]
 * @method $this mExpand() [Expand the drawer.]
 * @method $this mCollapse() [Collapse the drawer.]
 */
class Drawer extends Dialog
{
    public const string COMPONENT_NAME = 'drawer';
}