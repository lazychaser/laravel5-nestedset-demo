<?php

namespace App\Composers;

use App\Category;
use Illuminate\View\View;

class CategoriesProvider {

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->categories = Category::defaultOrder()->get()->toTree();
    }

}