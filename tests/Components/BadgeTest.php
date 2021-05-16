<?php

namespace Zupaazhai\Windtall\Tests\Components;

class BadgeTest extends ComponentTestCase
{
    /** @test */
    public function the_component_can_be_rendered()
    {
        $this->assertComponentRenders(
            '<span class="inline-flex px-2 text-xs font-medium leading-5 rounded-full text-purple-700 bg-purple-100"></span>',
            '<x-wt-badge />'
        );
    }

    /** @test */
    public function specify_varient()
    {
        //Primary
        $this->assertComponentRenders(
            '<span class="inline-flex px-2 text-xs font-medium leading-5 rounded-full text-purple-700 bg-purple-100"></span>',
            '<x-wt-badge varient="primary" />'
        );

        //Success
        $this->assertComponentRenders(
            '<span class="inline-flex px-2 text-xs font-medium leading-5 rounded-full text-green-700 bg-green-100"></span>',
            '<x-wt-badge varient="success" />'
        );

        //Danger
        $this->assertComponentRenders(
            '<span class="inline-flex px-2 text-xs font-medium leading-5 rounded-full text-red-700 bg-red-100"></span>',
            '<x-wt-badge varient="danger" />'
        );

        //Neutral
        $this->assertComponentRenders(
            '<span class="inline-flex px-2 text-xs font-medium leading-5 rounded-full text-gray-700 bg-gray-100"></span>',
            '<x-wt-badge varient="neutral" />'
        );

        //Warning
        $this->assertComponentRenders(
            '<span class="inline-flex px-2 text-xs font-medium leading-5 rounded-full text-yellow-700 bg-yellow-100"></span>',
            '<x-wt-badge varient="warning" />'
        );

        //Not in varient
        $this->assertComponentRenders(
            '<span class="inline-flex px-2 text-xs font-medium leading-5 rounded-full text-purple-700 bg-purple-100"></span>',
            '<x-wt-badge varient="no-in-scope" />'
        );
    }

    /** @test */
    public function it_can_be_scoped()
    {
        $this->assertComponentRenders(
            '<span class="inline-flex px-2 text-xs font-medium leading-5 rounded-full text-purple-700 bg-purple-100">Active</span>',
            '<x-wt-badge>Active</x-wt-badge>'
        );
    }
}
