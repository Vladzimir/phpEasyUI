# phpEasyUI
**php wrapper for EasyUI without dependency**

***
## Installation

Just copy all files into F3's `Easyui` folder. Done.

If you use composer, you can add this package by running `composer require vladzimir/phpeasyui`

## Quick Start

``` php
use Easyui\Easyui;

echo Easyui::dataGrid('test')->
pMethod('get')->
eOnSelect(new Js("function(){ //function code }"))->
append(
    Easyui::dataGrid()->
    mGetPager()->append(
        Easyui::pagination()->
        eOnChangePageSize(
            new Js("function (pageSize) { $.cookie('pageSize',pageSize); }")
        )
    )
);
```
All property start with letter p.

All event start with letter e.

All method start with letter m.
``` php
pMethodName()
eEventName()
mNethodName()
```
### Output
``` js
$("#test").datagrid({
    "method": "get",
    "onSelect": function () { //function code }
}).datagrid('getPager').pagination({
    "onChangePageSize": function (pageSize) { $.cookie('pageSize',pageSize); }
});
```
If you need to install components not as a selector, turn second variable to false
``` php
Easyui::dataGrid('test', false)
```
### Output
``` js
$(test).datagrid();
```

## Documentation 
See in code for components or official docs EasyUI https://www.jeasyui.com/documentation/index.php