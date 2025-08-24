<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    /**
     * Create a new component instance.
     */
  
public  $name;
public  $email;
    public function __construct($name="Talha rehman",$email="itsme.talha64@gmail.com")
    {
          $this->name = $name;
          $this->email = $email;
    }


    /**
     * Get the view / contents that represent the component.
     */

    public function render(): View|Closure|string
    {

        return view('components.alert');

    }
}
