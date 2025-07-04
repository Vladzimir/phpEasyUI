<?php

namespace Easyui\Components\Region;

use Easyui\Enums\LayoutPanelExpandMode;
use Easyui\Enums\LayoutPanelRegion;
use Easyui\Js;
use Easyui\Options;

/**
 * @method $this title(string $title) [The layout panel title text.]
 * @method $this region(LayoutPanelRegion $region) [Defines the layout panel position, the value is one of following: north, south, east, west, center.]
 * @method $this border(bool $border) [True to show layout panel border.]
 * @method $this split(bool $split) [True to show a split bar which user can change the panel size.]
 * @method $this iconCls(string $iconCls) [An icon CSS class to show a icon on panel header.]
 * @method $this href(string $href) [An URL to load data from remote server.]
 * @method $this collapsible(bool $collapsible) [Defines if to show collapsible button.]
 * @method $this minWidth(int $minWidth) [The minimum panel width.]
 * @method $this minHeight(int $minHeight) [The minimum panel height.]
 * @method $this maxWidth(int $maxWidth) [The maximum panel width.]
 * @method $this maxHeight(int $maxHeight) [The maximum panel height.]
 * @method $this expandMode(LayoutPanelExpandMode|null $expandMode) [The expanding mode when click on the collapsed panel. Possible values are 'float', 'dock' and null.<br> * float: the region panel will expand and float on the top.<br> dock: the region panel will expand and dock on the layout.<br>null: nothing happens.]
 * @method $this collapsedSize(int $collapsedSize) [The collapsed panel size.]
 * @method $this hideExpandTool(bool $hideExpandTool) [True to hide the expand tool on the collapsed panel.]
 * @method $this hideCollapsedContent(bool $hideCollapsedContent) [True to hide the title bar on the collapsed panel.]
 * @method $this collapsedContent(Js $collapsedContent) [The title content to display on the collapsed panel, possible values:<br>1) the title string.<br>2) a function that returns the title content.]
 * @method $this width($width) [The title content to display on the collapsed panel, possible values:<br>1) the title string.<br>2) a function that returns the title content.]
 */
class Panel extends Options
{
}