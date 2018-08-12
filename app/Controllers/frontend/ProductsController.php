<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 2:24
 */

namespace Smartbro\Controllers\frontend;

use App\Models\Catalog\Brand;
use App\Models\Catalog\Product;
use App\Models\Widget\Block;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Catalog\Product\Colour;
use App\Models\Catalog\Category;
use App\Models\Catalog\Tag;


class ProductsController extends Controller
{
    public function view(){
        $product = Product::orderBy('id','desc')->first();

        if(!$product){
            return response()->view(_get_frontend_theme_path('pages.404'), $this->dataForView, 404);
        }

        $this->dataForView['pageTitle'] = $product->getProductName();
        $this->dataForView['metaKeywords'] = $product->keywords;
        $this->dataForView['metaDescription'] = $product->seo_description;


        $this->dataForView['product'] = $product;
        $this->dataForView['relatedProducts'] = $product->relatedProduct;
        $this->dataForView['product_images'] = $product->get_AllImages();
        $this->dataForView['tags'] = $product->getTagsForView();

        /**
         * 产品的属性集的值
         */
        $this->dataForView['product_attributes'] = $product->productAttributes();
        $this->dataForView['product_options'] = $product->options();
        $this->dataForView['product_colours'] = Colour::LoadByProduct($product->id, true)->toArray();
        $this->dataForView['vuejs_libs_required'] = ['product_view'];

        /**
         * 加载通用的产品相关的Blocks
         */
        $this->dataForView['productDescriptionTop'] = Block::where('short_code','like','product_description_block_top%')->get();
        $this->dataForView['productDescriptionBottom'] = Block::where('short_code','like','product_description_block_bottom%')->get();
        $this->dataForView['productShortDescriptionTop'] = Block::where('short_code','like','product_short_description_block_top%')->get();
        $this->dataForView['productShortDescriptionBottom'] = Block::where('short_code','like','product_short_description_block_bottom%')->get();


        return view(_get_frontend_theme_path('catalog.product'),$this->dataForView);
    }

}