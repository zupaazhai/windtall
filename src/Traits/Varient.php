<?php

namespace Zupaazhai\Windtall\Traits;

trait Varient
{
    /**
     * Get varients
     *
     * @return array
     */
    public function getVarients(): array
    {
        return array_keys(config('windtall.varients'));
    }

    /**
     * Get varient config
     *
     * @param string $key
     *
     * @return mixed
     */
    public function getVarientConfig(string $key)
    {
        return config('windtall.varients.' . $key);
    }
}
