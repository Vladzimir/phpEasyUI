<?php

namespace Easyui\Components;

/**
 * Property/Params
 * @method $this pTextField(string $textField) [The underlying data field name to bind to this ComboTreeGrid.]
 * @method $this pLimitToGrid(bool $limitToGrid) [Limit the inputed values to the listed grid rows.]
 *
 * Event
 *
 * Method
 * @method $this mGrid() [Return the treegrid object.]
 * @method $this mSetValue($value) [Set the component value.]
 * @method $this mClear() [Clear the component value.]
 */
class ComboTreeGrid extends TreeGrid
{
    public const string COMPONENT_NAME = 'combotreegrid';
    use \Easyui\Traits\Combo;
}