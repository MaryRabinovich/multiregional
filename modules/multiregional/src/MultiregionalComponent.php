<?php

namespace Modules\Multiregional;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MultiregionalComponent extends Component
{
    protected array $regions;

    protected string $choosen;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->regions = [
            ['en' => 'kazan', 'ru' => 'Казань'],
            ['en' => 'moscow', 'ru' => 'Москва'],
            ['en' => 'novosibirsk', 'ru' => 'Новосибирск'],
            ['en' => 'st-petersburg', 'ru' => 'Петербург'],
        ];

        $this->choosen = 'moscow';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('multiregional-component')->with([
            'regions' => $this->regions,
            'choosen' => $this->choosen
        ]);
    }
}
