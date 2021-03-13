<?php

namespace App\MultiStep\Routing;

use Illuminate\Support\Facades\Route;

class PendingMultiStepRegistration
{

  protected $uri;

  protected $controller;

  protected $steps;

  protected $name;

  public function __construct($uri, $controller)
  {
    $this->uri = $uri;
    $this->controller = $controller;
  }

  public function steps($steps)
  {
    $this->steps = $steps;

    return $this;
  }

  public function name($name)
  {
    $this->name = $name;

    return $this;
  }


  public function __destruct()
  {
    //print_r('hello world');

    collect()->times($this->steps, function ($step) {

      //dump($steps);
      Route::group([
        'prefix' => $this->uri,
      ], function () use ($step) {
        //dump($step);

        Route::resource($step, "{$this->controller}Step{$step}");
      });
    });
  }
}
