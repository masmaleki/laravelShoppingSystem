<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Module;
use Illuminate\Support\Facades\View;
use App\Category;
use TCG\Voyager\Models\Post;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $footerAboutUs = Module::whereHas('position', function($q){
            $q->where('name', '=', 'footer-about-us');
        })->first();
        $CompanyAddress = Module::whereHas('position', function($q){
            $q->where('name', '=', 'footer-1');
        })->first();
        $cat = Category::with('children')->whereName('products')->first();
        $productCategories = $cat->children()->get();

        $ServicesCategory = Category::where('slug','=','services')->first();
        // Sharing is caring
        View::share('footerAboutUs', $footerAboutUs);
        View::share('CompanyAddress', $CompanyAddress);
        View::share('productCategories', $productCategories);
        View::share('ServicesCategory', $ServicesCategory);
    }
}
