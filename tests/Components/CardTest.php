<?php

namespace Zupaazhai\Windtall\Tests\Components;

class CardTest extends ComponentTestCase
{
    /** @test */
    public function the_component_can_be_rendered()
    {
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-white">
            <div class="card-body text-gray-600"></div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card />'
        );
    }

    /** @test */
    public function the_component_with_slot()
    {
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-white">
            <div class="card-body text-gray-600">Content place here</div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card>Content place here</x-wt-card>'
        );
    }

    /** @test */
    public function the_component_with_title_attribute()
    {
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-white">
            <div class="card-header mb-4">
                <h4 class="font-semibold text-lg text-gray-600">
                    Card title
                </h4>
            </div>
            <div class="card-body text-gray-600">Content place here</div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card title="Card title">Content place here</x-wt-card>'
        );
    }

    /** @test */
    public function the_component_with_extra_attribute()
    {
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-white" id="my-card">
            <div class="card-header mb-4">
                <h4 class="font-semibold text-lg text-gray-600">
                    Card title
                </h4>
            </div>
            <div class="card-body text-gray-600">Content place here</div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card title="Card title" id="my-card">Content place here</x-wt-card>'
        );
    }

    /** @test */
    public function the_component_with_custom_header()
    {
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-white">
            <div class="card-header mb-4"> <h1>Custom Header</h1> </div>
            <div class="card-body text-gray-600">
                <div>Content place here</div>
            </div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card title="Card title">
                <x-slot name="header">
                    <h1>Custom Header</h1>
                </x-slot>
                <div>Content place here</div>
            </x-wt-card>'
        );
    }

    /** @test */
    public function the_component_with_custom_footer()
    {
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-white">
            <div class="card-header mb-4">
                <h4 class="font-semibold text-lg text-gray-600">
                    Card title
                </h4>
            </div>
            <div class="card-body text-gray-600">
                <div>Content place here</div>
            </div>
            <div class="card-footer mt-4"> <h1>Custom Footer</h1> </div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card title="Card title">
                <div>Content place here</div>
                <x-slot name="footer">
                    <h1>Custom Footer</h1>
                </x-slot>
            </x-wt-card>'
        );
    }

    /** @test */
    public function the_component_with_varient()
    {
        // Primary
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-purple-600">
            <div class="card-header mb-4">
                <h4 class="font-semibold text-lg text-white">
                    Card title
                </h4>
            </div>
            <div class="card-body text-white">
                <div>Content place here</div>
            </div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card title="Card title" varient="primary">
                <div>Content place here</div>
            </x-wt-card>'
        );

        // Success
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-green-600">
            <div class="card-header mb-4">
                <h4 class="font-semibold text-lg text-white">
                    Card title
                </h4>
            </div>
            <div class="card-body text-white">
                <div>Content place here</div>
            </div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card title="Card title" varient="success">
                <div>Content place here</div>
            </x-wt-card>'
        );

        // Danger
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-red-600">
            <div class="card-header mb-4">
                <h4 class="font-semibold text-lg text-white">
                    Card title
                </h4>
            </div>
            <div class="card-body text-white">
                <div>Content place here</div>
            </div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card title="Card title" varient="danger">
                <div>Content place here</div>
            </x-wt-card>'
        );

        // Neutral
        $expected = <<<'HTML'
        <div class="min-w-0 p-4 rounded-lg shadow-sm border border-gray-100 bg-gray-600">
            <div class="card-header mb-4">
                <h4 class="font-semibold text-lg text-white">
                    Card title
                </h4>
            </div>
            <div class="card-body text-white">
                <div>Content place here</div>
            </div>
        </div>
        HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-wt-card title="Card title" varient="neutral">
                <div>Content place here</div>
            </x-wt-card>'
        );
    }
}
