<?php

namespace Easyui\Components;

use Easyui\Component;

/**
 * Property/Params
 * @method $this pEditable(bool $editable) [Defines if user can type text directly into the field.]
 * @method $this pTextField(string $textField) [The underlying data field name to bind to this ComboTree.]
 *
 * Event
 *
 * Method
 * @method $this mTree() [Return the tree object.]
 * @method $this mClear() [Clear the component value.]
 * @method $this mSetValue($value) [Set the component value. The value can be the node's 'id' value, or the 'id' and 'text' pairs. If the node's 'id' value does not exists in the tree, the 'text' property value will be used to display on the textbox.]
 */
class ComboTree extends Component
{
    public const string COMPONENT_NAME = 'combotree';
    use \Easyui\Traits\Combo;
    use \Easyui\Traits\Tree;
}