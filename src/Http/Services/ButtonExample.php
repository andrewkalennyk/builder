<?php

namespace Admin\Builder\Http\Services;;

use Illuminate\Contracts\View\View;
use Admin\Builder\Interfaces\Button;

class ButtonExample extends ButtonBase implements Button
{
    public function show(): View
    {
        return view('admin::list.buttons.button_example');
    }
}
