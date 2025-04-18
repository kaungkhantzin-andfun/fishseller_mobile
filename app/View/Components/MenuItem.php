<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuItem extends Component
{
    public $icon;
    public $label;

    public function __construct($icon, $label)
    {
        $this->icon = $icon;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.menu-item');
    }
}