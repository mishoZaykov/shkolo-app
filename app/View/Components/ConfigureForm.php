<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ConfigureForm extends Component
{
    public $button;
    /**
     * Create a new component instance.
     */
    public function __construct($button)
    {
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.configure-form', ['button' => $this->button]);
    }
}
