<?php

namespace Html\Elements;

use Html\Tags\Container\ContainerTags;

class HtmlHead extends ContainerTags{
    public function __construct(){
        $this->tagName = "head";
    }
}