<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterMenuItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $icon;
    public $label;
    public $url;


    public function __construct($icon, $label, $url = 'javascript:void(0)')
    {
        $this->icon = $icon;
        $this->label = $label;
        $this->url = $url;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer-menu-item');
    }
}
