<?php

namespace Zupaazhai\Windtall\Components;

use Illuminate\View\View;
use Zupaazhai\Windtall\Traits\Varient;

class Badge extends WindtallComponent
{
    use Varient;

    public $varient;

    public function __construct($varient = 'primary')
    {
        $this->varient = $varient;
    }

    /**
     * Render component
     *
     * @return View
     */
    public function render(): View
    {
        return view('windtall::components.badge');
    }

    /**
     * Ger varient
     *
     * @return string
     */
    public function getColorAndBg(): string
    {
        $varient = in_array($this->varient, $this->getVarients()) ? $this->varient : 'primary';
        $color = $this->getVarientConfig("{$varient}.color");

        return "text-{$color}-700 bg-{$color}-100";
    }
}
