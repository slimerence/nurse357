<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 1:52
 */

namespace Smartbro\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Catalog\Category;
use App\Models\Catalog\Brand;
use App\Models\Catalog\Product;
use App\Models\Widget\Block;
use Illuminate\Http\Request;
use App\Models\Catalog\Product\Colour;
use App\Models\Catalog\Tag;
use Carbon;

class CustomPageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function error(){
        $this->dataForView['menuName'] = '404';
        return view(
            _get_frontend_theme_path('pages.404'),
            $this->dataForView
        );
    }

    public function about(){
        $this->dataForView['menuName'] = 'about-us';
        return view(
            _get_frontend_theme_path('pages.about_us'),
            $this->dataForView
        );
    }
}