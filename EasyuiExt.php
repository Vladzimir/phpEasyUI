<?php

namespace Easyui;

use BadMethodCallException;
use Easyui\Extensions\DatagridFilter;
use Easyui\Extensions\DatagridFilter\FilterRules;
use Easyui\Extensions\DatagridFilter\Filters;

/**
 *
 * DataGrid
 * @method static DatagridFilter dataGridFilter(string|null $id = null, bool $asSelector = true, string $endSymbols = ';')
 **/
class EasyuiExt
{
    public static function filterRules(): FilterRules
    {
        return new FilterRules();
    }

    public static function filters(): Filters
    {
        return new Filters();
    }

    public static function __callStatic(string $name, array $arguments)
    {
        $class = '\\Easyui\\Extensions\\' . ucfirst($name);

        if (class_exists($class)) {
            if (count($arguments) > 3) {
                throw new BadMethodCallException('Only 3 arguments in method ' . $name);
            }

            $argument0 = $arguments[0] ?? null;
            $argument1 = $arguments[1] ?? true;
            $argument2 = $arguments[2] ?? ';' . PHP_EOL;

            return new $class($argument0, $argument1, $argument2);
        } else {
            throw new BadMethodCallException('Unknown method ' . $name);
        }
    }
}