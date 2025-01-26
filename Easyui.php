<?php

namespace Easyui;

use BadMethodCallException;
use Easyui\Components\Accordion;
use Easyui\Components\Calendar;
use Easyui\Components\CheckBox;
use Easyui\Components\CheckGroup;
use Easyui\Components\Combo;
use Easyui\Components\Combo\KeyHandler as ComboKeyHandler;
use Easyui\Components\ComboBox;
use Easyui\Components\ComboGrid;
use Easyui\Components\ComboTree;
use Easyui\Components\ComboTreeGrid;
use Easyui\Components\DataGrid;
use Easyui\Components\Datagrid\Column as DatagridColumn;
use Easyui\Components\DataList;
use Easyui\Components\DateBox;
use Easyui\Components\DateTimeBox;
use Easyui\Components\DateTimeSpinner;
use Easyui\Components\Dialog;
use Easyui\Components\Draggable;
use Easyui\Components\Drawer;
use Easyui\Components\Droppable;
use Easyui\Components\FileBox;
use Easyui\Components\Form;
use Easyui\Components\Group\Data as GroupData;
use Easyui\Components\Layout;
use Easyui\Components\LinkButton;
use Easyui\Components\MaskedBox;
use Easyui\Components\Menu;
use Easyui\Components\MenuButton;
use Easyui\Components\Messager;
use Easyui\Components\Messager\Alert as MessagerAlert;
use Easyui\Components\Messager\Confirm as MessagerConfirm;
use Easyui\Components\Messager\Progress as MessagerProgress;
use Easyui\Components\Messager\Prompt as MessagerPrompt;
use Easyui\Components\Messager\Show as MessagerShow;
use Easyui\Components\Mobile;
use Easyui\Components\NumberBox;
use Easyui\Components\NumberSpinner;
use Easyui\Components\Pagination;
use Easyui\Components\Pagination\Layout as PaginationLayout;
use Easyui\Components\Panel;
use Easyui\Components\Parser;
use Easyui\Components\PasswordBox;
use Easyui\Components\ProgressBar;
use Easyui\Components\PropertyGrid;
use Easyui\Components\RadioButton;
use Easyui\Components\RadioGroup;
use Easyui\Components\Resizable;
use Easyui\Components\SearchBox;
use Easyui\Components\SideMenu;
use Easyui\Components\Slider;
use Easyui\Components\Spinner;
use Easyui\Components\SplitButton;
use Easyui\Components\Swiper;
use Easyui\Components\SwitchButton;
use Easyui\Components\Tabs;
use Easyui\Components\TagBox;
use Easyui\Components\TextBox;
use Easyui\Components\TimeLine;
use Easyui\Components\TimePicker;
use Easyui\Components\TimeSpinner;
use Easyui\Components\Tooltip;
use Easyui\Components\Tree;
use Easyui\Components\TreeGrid;
use Easyui\Components\ValidateBox;
use Easyui\Components\Window;

/**
 * Base
 * @method static Draggable draggable(string|null $id = null, bool $asSelector = true)
 * @method static Droppable droppable(string|null $id = null, bool $asSelector = true)
 * @method static Resizable resizable(string|null $id = null, bool $asSelector = true)
 * @method static Pagination pagination(string|null $id = null, bool $asSelector = true)
 * @method static SearchBox searchBox(string|null $id = null, bool $asSelector = true)
 * @method static ProgressBar progressBar(string|null $id = null, bool $asSelector = true)
 * @method static Tooltip tooltip(string|null $id = null, bool $asSelector = true)
 *
 * Layout
 * @method static Panel panel(string|null $id = null, bool $asSelector = true)
 * @method static Tabs tabs(string|null $id = null, bool $asSelector = true)
 * @method static Accordion accordion(string|null $id = null, bool $asSelector = true)
 * @method static Layout layout(string|null $id = null, bool $asSelector = true)
 * @method static Drawer drawer(string|null $id = null, bool $asSelector = true)
 * @method static Swiper swiper(string|null $id = null, bool $asSelector = true)
 * @method static TimeLine timeLine(string|null $id = null, bool $asSelector = true)
 *
 * Menu and Button
 * @method static Menu menu(string|null $id = null, bool $asSelector = true)
 * @method static SideMenu sideMenu(string|null $id = null, bool $asSelector = true)
 * @method static LinkButton linkButton(string|null $id = null, bool $asSelector = true)
 * @method static MenuButton menuButton(string|null $id = null, bool $asSelector = true)
 * @method static SplitButton splitButton(string|null $id = null, bool $asSelector = true)
 * @method static SwitchButton switchButton(string|null $id = null, bool $asSelector = true)
 *
 * Form
 * @method static Calendar calendar(string|null $id = null, bool $asSelector = true)
 * @method static CheckBox checkBox(string|null $id = null, bool $asSelector = true)
 * @method static CheckGroup checkGroup(string|null $id = null, bool $asSelector = true)
 * @method static Combo combo(string|null $id = null, bool $asSelector = true)
 * @method static ComboBox comboBox(string|null $id = null, bool $asSelector = true)
 * @method static ComboGrid comboGrid(string|null $id = null, bool $asSelector = true)
 * @method static ComboTree comboTree(string|null $id = null, bool $asSelector = true)
 * @method static ComboTreeGrid comboTreeGrid(string|null $id = null, bool $asSelector = true)
 * @method static DateBox dateBox(string|null $id = null, bool $asSelector = true)
 * @method static DateTimeBox dateTimeBox(string|null $id = null, bool $asSelector = true)
 * @method static DateTimeSpinner dateTimeSpinner(string|null $id = null, bool $asSelector = true)
 * @method static FileBox fileBox(string|null $id = null, bool $asSelector = true)
 * @method static Form form(string|null $id = null, bool $asSelector = true)
 * @method static MaskedBox maskedBox(string|null $id = null, bool $asSelector = true)
 * @method static NumberBox numberBox(string|null $id = null, bool $asSelector = true)
 * @method static NumberSpinner numberSpinner(string|null $id = null, bool $asSelector = true)
 * @method static PasswordBox passwordBox(string|null $id = null, bool $asSelector = true)
 * @method static RadioButton radioButton(string|null $id = null, bool $asSelector = true)
 * @method static RadioGroup radioGroup(string|null $id = null, bool $asSelector = true)
 * @method static Slider slider(string|null $id = null, bool $asSelector = true)
 * @method static Spinner spinner(string|null $id = null, bool $asSelector = true)
 * @method static TagBox tagBox(string|null $id = null, bool $asSelector = true)
 * @method static TextBox textBox(string|null $id = null, bool $asSelector = true)
 * @method static TimePicker timePicker(string|null $id = null, bool $asSelector = true)
 * @method static TimeSpinner timeSpinner(string|null $id = null, bool $asSelector = true)
 * @method static ValidateBox validateBox(string|null $id = null, bool $asSelector = true)
 *
 * Window
 * @method static Window window(string|null $id = null, bool $asSelector = true)
 * @method static Dialog dialog(string|null $id = null, bool $asSelector = true)
 *
 * DataGreed and Tree
 * @method static DataGrid dataGrid(string|null $id = null, bool $asSelector = true)
 * @method static DataList dataList(string|null $id = null, bool $asSelector = true)
 * @method static PropertyGrid propertyGrid(string|null $id = null, bool $asSelector = true)
 * @method static Tree tree(string|null $id = null, bool $asSelector = true)
 * @method static TreeGrid treeGrid(string|null $id = null, bool $asSelector = true)
 **/
class Easyui
{
    public static function paginationLayout(): PaginationLayout
    {
        return new PaginationLayout();
    }

    public static function dataGridColumn(): DatagridColumn
    {
        return new DatagridColumn();
    }

    public static function groupData(): GroupData
    {
        return new GroupData();
    }

    public static function comboKeyHandler(): ComboKeyHandler
    {
        return new ComboKeyHandler();
    }

    public static function messagerAlert(): MessagerAlert
    {
        return new messagerAlert();
    }

    public static function messagerConfirm(): MessagerConfirm
    {
        return new messagerConfirm();
    }

    public static function messagerProgress(): MessagerProgress
    {
        return new messagerProgress();
    }

    public static function messagerPrompt(): MessagerPrompt
    {
        return new messagerPrompt();
    }

    public static function messagerShow(): MessagerShow
    {
        return new messagerShow();
    }

    public static function parser(): Parser
    {
        return new Parser(null, false);
    }

    public static function mobile(): Mobile
    {
        return new Mobile(null, false);
    }

    public static function messager(): Messager
    {
        return new Messager(null, false);
    }

    public static function __callStatic(string $name, array $arguments)
    {
        $class = '\\Easyui\\Components\\' . ucfirst($name);

        if (class_exists($class)) {
            if (count($arguments) > 2) {
                throw new BadMethodCallException('Only 2 arguments in method ' . $name);
            }

            $argument0 = $arguments[0] ?? null;
            $argument1 = $arguments[1] ?? true;

            return new $class($argument0, $argument1);
        } else {
            throw new BadMethodCallException('Unknown method ' . $name);
        }
    }
}