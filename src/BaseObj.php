<?php
namespace changxiaoming\FillName;

use changxiaoming\FillName\traits\Singleton;

class BaseObj
{
    use Singleton;

    public function __construct(...$args)
    {
        $this->init(...$args);
    }

    /**
     * @param ...$args
     */
    public function init(...$args)
    {

    }
}