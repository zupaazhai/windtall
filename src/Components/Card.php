<?php

namespace Zupaazhai\Windtall\Components;

use Illuminate\View\View;
use Zupaazhai\Windtall\Traits\Varient;

class Card extends WindtallComponent
{
    use Varient;

    public $title;

    public $varient;

    public function __construct($title = '', $varient = '')
    {
        $this->title = $title;
        $this->varient = $varient;
    }

    /**
     * Render component
     *
     * @return View
     */
    public function render(): View
    {
        return view('windtall::components.card');
    }

    /**
     * Get background color varient
     *
     * @return string
     */
    public function getBgVarient(): string
    {
        $color = in_array($this->varient, $this->getVarients())
            ? ($this->getVarientConfig($this->varient . '.color') . '-600')
            : 'white';

        return 'bg-' . $color;
    }

    /**
     * Get text color varient
     *
     * @return string
     */
    public function getColorVariennt(): string
    {
        $color = in_array($this->varient, $this->getVarients())
            ? ('white')
            : 'gray-600';

        return 'text-' . $color;
    }
}
