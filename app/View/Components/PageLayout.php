<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $metaKeyword;
    public $metaDescription;

    public function __construct($metaKeyword, $metaDescription)
    {
        $this->metaKeyword = $metaKeyword;
        $this->metaDescription = $metaDescription;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-layout');
    }
}
