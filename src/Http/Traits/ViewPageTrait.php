<?php

namespace Admin\Builder\Http\Traits;

use Admin\Builder\ViewPage;

/**
 * Trait ViewPageTrait.
 */
trait ViewPageTrait
{
    public function setView()
    {
        ViewPage::create([
           'model'     => get_class($this),
           'id_record' => $this->id,
        ]);
    }
}
