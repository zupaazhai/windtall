<?php

namespace Zupaazhai\Windtall\Components;

use Illuminate\View\View;
use Zupaazhai\Windtall\Components\WindtallComponent;

class Button extends WindtallComponent
{
    public $tag;

    public $size;

    public $varient;

    public $layout;

    public function __construct(
        $tag = 'button',
        $size = 'regular',
        $varient = 'primary',
        $layout = null
    ) {
        $this->tag = $tag;
        $this->size = $size;
        $this->varient = $varient;
        $this->layout = $layout;
    }

    /**
     * Render component
     *
     * @return View
     */
    public function render(): View
    {
        return view('windtall::components.button');
    }

    /**
     * Ger varient
     *
     * @return string
     */
    public function getVarient(): string
    {
        $currentVarient = $this->varient;

        $varients = [
            'primary' => 'bg-purple-600 active:bg-purple-600 hover:bg-purple-700 focus:shadow-outline-purple text-white',
            'primary_outline' => 'border border-purple-600 text-purple-600 hover:border-purple-800',
            'primary_link' => 'text-purple-600 hover:bg-purple-300',
        ];

        if ($this->layout == 'outline') {
            $currentVarient = $currentVarient . '_outline';
        }

        if ($this->layout == 'link') {
            $currentVarient = $currentVarient . '_link';
        }

        return array_key_exists($currentVarient, $varients) ? $varients[$currentVarient] : $varients['primary'];
    }

    /**
     * Get size class
     *
     * @return string
     */
    public function getSize(): string
    {
        $sizeClass = [
            'larger' => 'px-10 py-4',
            'large' => 'px-5 py-3',
            'regular' => 'px-4 py-2',
            'small' => 'px-3 py-1',
        ];

        return array_key_exists($this->size, $sizeClass) ? $sizeClass[$this->size] : $sizeClass['regular'];
    }
}
