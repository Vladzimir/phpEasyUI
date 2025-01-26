<?php

namespace Easyui\Enums;

enum ResizableHandles: string
{
    case NORTH = 'n';
    case EAST = 'e';
    case SOUTH = 's';
    case WEST = 'w';
    case NORTHEAST = 'ne';
    case SOUTHEAST = 'se';
    case SOUTHWEST = 'sw';
    case NORTHWEST = 'nw';
    case ALL = 'all';
}
