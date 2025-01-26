<?php

namespace Easyui\Components;

/**
 * Property/Params
 * @method $this pAccept(string $accept) [Specifies the types of files that the server accepts.]
 * @method $this pMultiple(bool $multiple) [Defines if to accept multiple files.]
 * @method $this pSeparator(string $separator) [The separator char between multiple file names.]
 *
 * Event
 *
 * Method
 * @method $this mFiles() [Return the selected file list object.]
 */
class FileBox extends TextBox
{
    public const string COMPONENT_NAME = 'filebox';
}