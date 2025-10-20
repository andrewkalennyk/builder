<?php

namespace Admin\Builder\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function showPage(): View
    {
        $dashboardConfig = config('builder.dashboard');

        $columns = $dashboardConfig['columns'];
        $nameClassGrid = 12 / count($columns);

        return view(
            'admin::dashboard.index',
            compact('columns', 'nameClassGrid')
        );
    }
}
