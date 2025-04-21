<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuItem extends Component
{
    public $icon;
    public $label;

    public $url = null;

    public function __construct($icon, $label, $url = 'javascript:void(0)')
    {
        $this->icon = $icon;
        $this->label = $label;
        $this->url = $url;
    }

    public function render()
    {
        return view('components.menu-item');
    }
}