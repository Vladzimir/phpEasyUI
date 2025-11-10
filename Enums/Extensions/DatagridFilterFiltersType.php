<?php

namespace Easyui\Enums\Extensions;

enum DatagridFilterFiltersType: string
{
    case LABEL = 'label';
    case TEXT = 'text';
    case TEXTAREA = 'textarea';
    case CHECKBOX = 'checkbox';
    case NUMBERBOX = 'numberbox';
    case VALIDATEBOX = 'validatebox';
    case DATEBOX = 'datebox';
    case COMBOBOX = 'combobox';
    case COMBOTREE = 'combotree';
}