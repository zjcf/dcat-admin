<?php

namespace Dcat\Admin\Show;

use Dcat\Admin\Support\Helper;

class Html extends Field
{
    public $html;

    public function __construct($html)
    {
        $this->html = $html;
    }

    public function render()
    {
        if ($this->html instanceof \Closure) {
            return Helper::render($this->html->call($this, $this->parent->model()), [$this->value()], $this->parent->model());
        }
        return Helper::render($this->html, [$this->value()], $this->parent->model());
    }
}
