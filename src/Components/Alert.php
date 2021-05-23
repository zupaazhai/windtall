<?php

namespace Zupaazhai\Windtall\Components;

use Illuminate\View\View;
use Zupaazhai\Windtall\Traits\Style;
use Zupaazhai\Windtall\Traits\Varient;

class Alert extends WindtallComponent
{
    use Varient, Style;

    public $varient;

    public function __construct($varient = 'primary')
    {
        $this->varient = $varient;
    }

    /**
     * Render alert
     *
     * @return View
     */
    public function render(): View
    {
        return view('windtall::components.alert');
    }

    /**
     * Get varient
     *
     * @return string
     */
    public function getVarient(): string
    {
        $varient = in_array($this->varient, $this->getVarients()) ? $this->varient : 'primary';
        $color = $this->getVarientConfig($varient . '.color');

        return 'bg-' . $color . '-50 text-' . $color . '-900';
    }
}
