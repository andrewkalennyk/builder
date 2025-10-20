<?php

namespace Admin\Builder\Http\Services;

abstract class ButtonBase
{
    protected $listing;

    public function __construct($listing)
    {
        $this->listing = $listing;
    }
}
