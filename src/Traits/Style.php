<?php

namespace Zupaazhai\Windtall\Traits;

trait Style
{
    /**
     * Get style config
     *
     * @return array
     */
    public function getStyle(): array
    {
        return config('windtall.styles');
    }

    /**
     * Get border rounded
     *
     * @return string
     */
    public function getBorderRounded(): string
    {
        return 'rounded-' . $this->getStyle()['border_rounded'];
    }
}
