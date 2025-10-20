<?php

namespace Admin\Builder\Http\Interfaces;

use Illuminate\Contracts\View\View;

interface Button
{
    public function show(): View;
}
