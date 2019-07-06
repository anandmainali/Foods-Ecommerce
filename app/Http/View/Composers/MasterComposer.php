<?php

namespace App\Http\View\Composers;

use App\infos;
use App\Slider;
use App\Product;
use App\Category;
use App\HappyCustomer;
use Illuminate\View\View;

class MasterComposer
{
  public function compose(View $view)
  {
    $info = infos::first();
    $categories = Category::all();
    $recommendations = Product::inRandomOrder()->take(4)->get();

    $view->with('info', $info)->with('categories', $categories)->with('recommendations', $recommendations);
  }
}
