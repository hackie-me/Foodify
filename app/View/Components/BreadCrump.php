<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadCrump extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $url;

    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bread-crump');
    }
}
