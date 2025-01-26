<?php

namespace Easyui\Components\Pagination;

use Easyui\Options;

/**
 * @method $this list() [the page size list.]
 * @method $this sep() [the page button separator]
 * @method $this first() [the first button.]
 * @method $this prev() [the prev button.]
 * @method $this next() [the next button.]
 * @method $this last() [the last button.]
 * @method $this refresh() [the refresh button.]
 * @method $this manual() [the manual page input to allow entering page number.]
 * @method $this links() [the page number links.]
 * @method $this info() [the page information.]
 */
class Layout extends Options
{
    /**
     * @return array|null
     */
    public function jsonSerialize(): ?array
    {
        return $this->options ? array_keys($this->options) : null;
    }
}