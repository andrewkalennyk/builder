<?php

namespace Admin\Builder\Settings;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class Login
{
    protected string $backgroundUrl = '/packages/admin/builder/img/vis-admin-lock.jpg';
    protected $css;

    public function onLogin(): RedirectResponse
    {
        return Redirect::to('/admin/tree');
    }

    public function onLogout(): RedirectResponse
    {
        return Redirect::to('/');
    }

    public function getBackground(): string
    {
        return config('builder.login.background_url', $this->backgroundUrl);
    }

    public function getCss()
    {
        return $this->css;
    }
}
