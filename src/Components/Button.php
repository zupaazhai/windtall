<?php

namespace Zupaazhai\Windtall\Components;

use Illuminate\View\View;
use Zupaazhai\Windtall\Traits\Style;
use Zupaazhai\Windtall\Traits\Varient;

class Button extends WindtallComponent
{
    use Varient;
    use Style;

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
        $currentVarient = in_array($this->varient, $this->getVarients()) ? $this->varient : 'primary';
        $varients = $this->getStyleOfVarient($currentVarient);

        if ($this->layout == 'outline') {
            $currentVarient = $currentVarient . '_outline';
        }

        if ($this->layout == 'link') {
            $currentVarient = $currentVarient . '_link';
        }

        return $varients[$currentVarient];
    }

    /**
     * Get style of varient
     *
     * @param string $varient
     *
     * @return array
     */
    public function getStyleOfVarient(string $varient): array
    {
        $color = $this->getVarientConfig($varient . '.color');

        return [
            "{$varient}" => "bg-{$color}-600 active:bg-{$color}-600 hover:bg-{$color}-700 focus:shadow-outline-{$color} text-white",
            "{$varient}_outline" => "border border-{$color}-600 text-{$color}-600 hover:border-{$color}-800",
            "{$varient}_link" => "text-{$color}-600 hover:bg-{$color}-300",
        ];
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
