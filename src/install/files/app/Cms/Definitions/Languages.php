<?php

namespace App\Cms\Definitions;

use Admin\Builder\Http\Services\Actions;
use Admin\Builder\Models\Language;
use Admin\Builder\Http\Fields\{Checkbox, Select};
use Admin\Builder\Http\Definitions\Resource;

class Languages extends Resource
{
    public string $model = Language::class;
    public string $title = 'Языки сайта';
    protected string $orderBy = 'priority asc';
    protected bool $isSortable = true;

    public function fields(): array
    {
        return [
            Select::make('Язык', 'language')
                ->options($this->model()->supportedLocales()),
            Checkbox::make('Активен', 'is_active')->fastEdit(),
        ];
    }

    public function actions(): Actions
    {
        return Actions::make()->insert()->hideActions();
    }

}
