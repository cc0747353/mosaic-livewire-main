<?php
namespace App\View\Components;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $title;
    public $route;
    public $icon;
    public $subItems;

    public function __construct($title, $route, $icon, $subItems = [])
    {
        $this->title = $title;
        $this->route = $route;
        $this->icon = $icon;
        $this->subItems = $subItems;
    }

    public function render()
    {
        return view('components.nav-item');
    }
}
