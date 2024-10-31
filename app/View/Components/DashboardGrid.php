<?php

namespace App\View\Components;

use App\Models\DashboardButton;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardGrid extends Component
{

    public $buttons;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->buttons = DashboardButton::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-grid');
    }
}
