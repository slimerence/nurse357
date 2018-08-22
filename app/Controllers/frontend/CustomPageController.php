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
use Illuminate\Support\Facades\URL;
use App\Models\Catalog\Product\Colour;
use App\Models\Catalog\Tag;
use Carbon;

class CustomPageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function switch_language($lang, Request $request){
        if($lang == 'cn'){
            $request->session()->put('prefer-lang','cn');
        }else{
            $request->session()->put('prefer-lang','en');
        }
        return redirect(URL::previous());
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
    public function return(){
        $this->dataForView['menuName'] = 'return';
        return view(
            _get_frontend_theme_path('pages.return'),
            $this->dataForView
        );
    }

    public function term(){
        //return response()->download( public_path(). '/download/terms.pdf');
        $this->dataForView['menuName'] = 'term';
        return view(
            _get_frontend_theme_path('pages.term'),
            $this->dataForView
        );
    }
}