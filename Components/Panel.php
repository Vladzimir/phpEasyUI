<?php

namespace Easyui\Components;

use Easyui\Component;
use Easyui\Enums\PanelCloseAnimation;
use Easyui\Enums\PanelHalign;
use Easyui\Enums\PanelOpenAnimation;
use Easyui\Enums\PanelTitleDirection;
use Easyui\Js;

/**
 * Property/Params
 * @method $this pId(string $id) [The id attribute of this panel.]
 * @method $this pTitle(string $title) [The title text to display in panel header.]
 * @method $this pIconCls(string $iconCls) [A CSS class to display a 16x16 icon in panel.]
 * @method $this pWidth(int $width) [Set the panel width.]
 * @method $this pHeight(int $height) [Set the panel height.]
 * @method $this pLeft(int $left) [Set the panel left position.]
 * @method $this pTop(int $top) [Set the panel top position.]
 * @method $this pCls(string $cls) [Add a CSS class to the panel.]
 * @method $this pHeaderCls(string $headerCls) [Add a CSS class to the panel header.]
 * @method $this pBodyCls(string $bodyCls) [Add a CSS class to the panel body.]
 * @method $this pStyle(array $style) [Add a custom specification style to the panel.]
 * @method $this pFit(bool $fit) [When true to set the panel size fit its parent container.]
 * @method $this pBorder(bool $border) [Defines if to show panel border.]
 * @method $this pDoSize(bool $doSize) [If set to true, the panel will be resize and do layout when created.]
 * @method $this pNoheader(bool $noheader) [If set to true, the panel header will not be created.]
 * @method $this pContent(string $content) [The panel body content.]
 * @method $this pHalign(PanelHalign $halign) [The panel header alignment. Possible values are: 'top', 'left', 'right'.]
 * @method $this pTitleDirection(PanelTitleDirection $titleDirection) [The header title direction. Possible values are: 'up', 'down'. This property is valid only when the 'halign' property is set to 'left' or 'right'.]
 * @method $this pCollapsible(bool $collapsible) [Defines if to show collapsible button.]
 * @method $this pMinimizable(bool $minimizable) [Defines if to show minimizable button.]
 * @method $this pMaximizable(bool $maximizable) [Defines if to show maximizable button.]
 * @method $this pClosable(bool $closable) [Defines if to show closable button.]
 * @method $this pTools(string|array $tools) [Custom tools, possible values:<br>1) an array, each element contains iconCls and handler properties.<br>2) a selector that indicating the tools]
 * @method $this pHeader(string $header) [The panel header.]
 * @method $this pFooter(string $footer) [The panel footer.]
 * @method $this pOpenAnimation(PanelOpenAnimation $openAnimation) [The opening animation. Available values are: 'slide', 'fade', 'show'.]
 * @method $this pOpenDuration(int $openDuration) [The opening duration.]
 * @method $this pCloseAnimation(PanelCloseAnimation $closeAnimation) [The closing animation. Available values are: 'slide', 'fade', 'hide'.]
 * @method $this pCloseDuration(int $closeDuration) [The closing duration.]
 * @method $this pCollapsed(bool $collapsed) [Defines if the panel is collapsed at initialization.]
 * @method $this pMinimized(bool $minimized) [Defines if the panel is minimized at initialization.]
 * @method $this pMaximized(bool $maximized) [Defines if the panel is maximized at initialization.]
 * @method $this pClosed(bool $closed) [Defines if the panel is closed at initialization.]
 * @method $this pHref(string $href) [A URL to load remote data and then display in the panel. Notice that the content will not be loaded until the panel is open and expand.]
 * @method $this pCache(bool $cache) [True to cache the panel content that loaded from href.]
 * @method $this pLoadingMessage(string $loadingMessage) [When loading remote data show a message in the panel.]
 * @method $this pExtractor(Js $extractor) [Defines how to extract the content from ajax response, return extracted data.]
 * @method $this pMethod(string $method) [The http method to load content page.]
 * @method $this pQueryParams(array $queryParams) [The additional parameters that will be sent when loading a content page.]
 * @method $this pLoader(Js $loader) [Defines how to load content page from remote server. This function takes following parameters:<br>param: the parameter object to pass to remote server.<br>success(data): the callback function that will be called when retrieve data successfully.<br>error(): the callback function that will be called when failed to retrieve data.]
 *
 * @method $this pSelected(bool $selected) [ONLY FOR accordion. Set to true to expand the panel.]
 * @method $this pDisabled(bool $disabled) [ONLY FOR TABS. When set to true, the tab panel will be disabled.]
 *
 * Event
 * @method $this eOnBeforeLoad(Js $onBeforeLoad) [Fires before loading a content page, return false to ignore this action.]
 * @method $this eOnLoad(Js $onLoad) [Fires when remote data is loaded.]
 * @method $this eOnLoadError(Js $onLoadError) [Fires when some errors occur to load content page.]
 * @method $this eOnBeforeOpen(Js $onBeforeOpen) [Fires before panel is opened, return false to stop the open.]
 * @method $this eOnOpen(Js $onOpen) [Fires after panel is opened.]
 * @method $this eOnBeforeClose(Js $onBeforeClose) [Fires before panel is closed, return false to cancel the close. The panel declared below cannot be closed.]
 * @method $this eOnClose(Js $onClose) [Fires after panel is closed.]
 * @method $this eOnBeforeDestroy(Js $onBeforeDestroy) [Fires before panel is destroyed, return false to cancel the destroy.]
 * @method $this eOnDestroy(Js $onDestroy) [Fires after panel is destroyed.]
 * @method $this eOnBeforeCollapse(Js $onBeforeCollapse) [Fires before panel is collapsed, return false to stop the collapse.]
 * @method $this eOnCollapse(Js $onCollapse) [Fires after panel is collapsed.]
 * @method $this eOnBeforeExpand(Js $onBeforeExpand) [Fires before panel is expanded, return false to stop the expand.]
 * @method $this eOnExpand(Js $onExpand) [Fires after panel is expanded.]
 * @method $this eOnResize(Js $onResize) [Fires after panel is resized.<br>width: the new outer width<br>height: the new outer height]
 * @method $this eOnMove(Js $onMove) [Fires after panel is moved.<br>left: the new left position<br>top: the new top position]
 * @method $this eOnMaximize(Js $onMaximize) [Fires after the window has been maximized.]
 * @method $this eOnRestore(Js $onRestore) [Fires after the window has been restored to its original size.]
 * @method $this eOnMinimize(Js $onMinimize) [Fires after the window has been minimized.]
 *
 * Method
 * @method $this mOptions() [Return options property.]
 * @method $this mPanel() [Return the outer panel object.]
 * @method $this mHeader() [Return the panel header object.]
 * @method $this mFooter() [Return the panel footer object.]
 * @method $this mBody() [Return the panel body object.]
 * @method $this mSetTitle($title) [Set the title text of header.]
 * @method $this mOpen($forceOpen) [When forceOpen parameter set to true, the panel is opened bypass the onBeforeOpen callback.]
 * @method $this mClose($close) [When forceClose parameter set to true, the panel is closed bypass the onBeforeClose callback.]
 * @method $this mDestroy($forceDestroy) [When forceDestroy parameter set to true, the panel is destroyed bypass the onBeforeDestroy callback.]
 * @method $this mClear() [Clear the panel content.]
 * @method $this mRefresh($href) [Refresh the panel to load remote data. If the 'href' parameter is assigned, it will override the old 'href' property.]
 * @method $this mResize($options) [Set panel size and do layout. The options object contains following properties:<br>width: the new panel width<br>height: the new panel height<br>left: the new panel left position<br>top: the new panel top position]
 * @method $this mDoLayout() [Set the sizes of child components within the panel.]
 * @method $this mMove($options) [Move the panel to a new position. The options object contains following properties:<br>left: the new panel left position<br>top: the new panel top position]
 * @method $this mMaximize() [Fits the panel winthin its container.]
 * @method $this mMinimize() [Minimizing the panel.]
 * @method $this mRestore() [Restores the maximized panel back to its original size and position.]
 * @method $this mCollapse($animate) [Collapses the panel body. The 'animate' parameter value indicates if to use animation effect.]
 * @method $this mExpand($animate) [Expand the panel body. The 'animate' parameter value indicates if to use animation effect.]
 */
class Panel extends Component
{
    public const string COMPONENT_NAME = 'panel';
}