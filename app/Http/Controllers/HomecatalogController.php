<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomecatalogController extends Controller
{
    /* pseudo db */
    public $products = [
        [
        'id' => '1',
        'name' => 'Square Dress in Off White',
        'brand' => 'Boolean Fashion',
        'description' => 'Square Dress in Off White by Issey Miyake Pleats Please. Timeless and ethereal top features Pleats Pleats signature vertical pleats, high neck opening, straight hem, layered panels at sides, and short sleeves.',
        'price' => '199,00',
        'image' => 'http://cdn.shopify.com/s/files/1/0153/0845/products/6-23_Womens_Part1-132_1024x1024@2x.jpg?v=1510856709'
        ],
        [
        'id' => '2',
        'name' => 'Nonchalant Wool Dress in Black',
        'brand' => 'Boolean Fashion',
        'description' => 'Nonchalant Wool Dress in Black by Henrik Vibskov. Voluminous knee-length wool dress features a winter-weight compacted wool fabric, slightly wide round neck, large full length blouson sleeves with pleating at cuffs, mid back yoke seam with gathered pleating, and three button closure at upper back.',
        'price' => '149,00',
        'image' => 'http://cdn.shopify.com/s/files/1/0153/0845/products/09-22_Womens_HenrickVibskov_FINAL-17_1024x1024@2x.jpg?v=1510854156',
        ],
        [
        'id' => '3',
        'name' => 'Painter Dress in Cream',
        'brand' => 'Boolean Fashion',
        'description' => 'Painter Dress in Cream by Black Crane Kids. Thick cotton t-shirt dress features high crewneck, drop-shoulder, short sleeves, frayed detail at bottom, single button closure at back, middle hem at back, and tear drop opening below loop-through button closure.',
        'price' => '79,00',
        'image' => 'http://cdn.shopify.com/s/files/1/0153/0845/products/9-20_BlackCraneKids_FINAL016_bd52f1a3-0f7c-430d-bfab-409c5b4eaa8d_1024x1024@2x.jpg?v=1510854090',
        ],
        [
        'id' => '4',
        'name' => 'Lone Dress in Black',
        'brand' => 'Boolean Fashion',
        'description' => 'Lone Dress in Black by Hope. Wrap dress features waist band at hips, snap for closure, long sleeve silhouette, versatility in fit, relaxed fit at top, straight-narrow fit at bottom, stitched waistband at back, worn open-as-coat or closed ability, and hidden buttoning at waist. ',
        'price' => '129,00',
        'image' => 'http://cdn.shopify.com/s/files/1/0153/0845/products/09-29_Womens_Hope_FINAL-31_1024x1024@2x.jpg?v=1510853215',
        ],
    ];


    public function showCatalog()
    {
        return view('home.index', ['prods' => $this->products]);
    }
    
    public function showProduct($idProduct)
    {
        $prodToReturned = null;

        foreach ($this->products as $product) {
            if ( $product['id'] == $idProduct ) {
               $prodToReturned = $product;
                /* dd($prodToReturned); */
            }
            
        }
        return view('product.index', ['product' => $prodToReturned]);
    }
}



?>