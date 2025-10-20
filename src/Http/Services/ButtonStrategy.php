<?php

namespace Admin\Builder\Http\Services;;

use Admin\Builder\Http\Interfaces\Button;

class ButtonStrategy
{
   private $button;

   public function __construct(Button $button)
   {
       $this->button = $button;
   }

   public function render()
   {
       return $this->button->show();
   }
}
