<?php

namespace Zupaazhai\Windtall\Components;

use Illuminate\View\View;

class Avatar extends WindtallComponent
{
    public $size;

    public function __construct($size = 8)
    {
        $this->size = $size;
    }

    /**
     * Render view
     *
     * @return View
     */
    public function render(): View
    {
        return view('windtall::components.avatar');
    }


    /**
     * Get size class
     *
     * @return string
     */
    public function getSize(): string
    {
        if (is_numeric($this->size)) {
            return 'w-' . $this->size . ' h-' . $this->size;
        }

        if (strpos($this->size, 'x') !== false) {
            list($width, $height) = explode('x', $this->size);

            return implode(' ', [
                empty($width) ? '' : 'w-' . $width,
                empty($height) ? '' : ' h-' . $height,
            ]);
        }

        return '';
    }
}
