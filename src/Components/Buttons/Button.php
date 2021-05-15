<?php

namespace Zupaazhai\Windtall\Components\Buttons;

use Illuminate\View\View;
use Zupaazhai\Windtall\Components\WindtallComponent;

class Button extends WindtallComponent
{
    public $tag;

    public $size;

    public function __construct(
        $tag = 'button',
        $size = 'regular'
    ) {
        $this->tag = $tag;
        $this->size = $size;
    }

    /**
     * Render component
     *
     * @return View
     */
    public function render() : View
    {
        return view('windtall::components.buttons.button');
    }

    public function getSize() : string
    {
        $sizeClass = [
            'larger' => 'px-10 py-4',
            'large' => 'px-5 py-3',
            'regular' => 'px-4 py-2',
            'small' => 'px-3 py-1'
        ];

        return array_key_exists($this->size, $sizeClass) ? $sizeClass[$this->size] : 'regular';
    }
}
