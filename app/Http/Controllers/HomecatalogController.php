<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class HomecatalogController extends Controller
{


    public function showCatalog()
    {

        $prodotti_in_catalogo = Product::all();
        
        return view('home.index', ['prods' => $prodotti_in_catalogo]);
    }
    
    public function showProduct($idProduct)
    {

        $prodotto_selezionato = Product::where('id', $idProduct)->first();

        /* $prodToReturned = null;

        foreach ($this->products as $product) {
            if ( $product['id'] == $idProduct ) {
               $prodToReturned = $product;
                
            }
            
        } */
        return view('product.index', ['product' => $prodotto_selezionato]);
    }

    public function addProduct(Request $request)
    {
        $new_product = new Product();

        $new_product->name = $request->input('title');
        
        $new_product->save();

        die();
    }


}



?>