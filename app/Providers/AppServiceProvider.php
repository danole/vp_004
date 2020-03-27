<?php

namespace App\Providers;

use App\Models\CategoryModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categoryItem=CategoryModel::CategoryFromDatabase();
        $category=[];
        foreach ($categoryItem as $value){
            $item=[];
            $item[]=$value->title;
            $item[]=$value->id;
            $category[]= $item;
        }
        Schema::defaultStringLength(191);
        View::share('category', $category);
    }
}
