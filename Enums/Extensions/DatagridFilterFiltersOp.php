<?php

namespace Easyui\Enums\Extensions;

enum DatagridFilterFiltersOp: string
{
    case CONTAINS = 'contains';
    case EQUAL = 'equal';
    case NOTEQUAL = 'notequal';
    case BEGINWITH = 'beginwith';
    case ENDWITH = 'endwith';
    case LESS = 'less';
    case LESSOREQUAL = 'lessorequal';
    case GREATER = 'greater';
    case GREATEROREQUAL = 'greaterorequal';
}