<?php

namespace Easyui;

use Exception;

use function json_encode;
use function preg_replace_callback;
use function stripcslashes;

class Encode
{
    /**
     * @param $toJson
     * @return string
     * @throws Exception
     */
    public static function json($toJson): string
    {
        $data = json_encode($toJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        if ($data === false) {
            throw new Exception('Invalid data');
        }

        // replace markup by JS
        return preg_replace_callback('/"::JS::(.*?)::JS::"/', function ($matches) {
            return stripcslashes($matches[1]);
        }, $data);
    }
}