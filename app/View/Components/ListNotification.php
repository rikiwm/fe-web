<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListNotification extends Component
{
    public $itemprop;
    public $item;
    /**
     * Create a new component instance.
     */
    public function __construct($itemprop = null, $item = null)
    {
        //
        $this->itemprop = collect($itemprop);
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.list-notification');
    }
}
