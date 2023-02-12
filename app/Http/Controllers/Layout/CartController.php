<?php

namespace App\Http\Controllers\Layout;

use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function Index(){
//        $products = DB::table('products')->get();
//        return view('frontend.cart.index', compact('products'));
    }

    public function AddCart(Request $req, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $req->Session()->put('Cart', $newCart);
        }
        return view('frontend.cart.cart');
    }

    public function DeleteItemCart(Request $req, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if (Count($newCart->products) > 0) {
            $req->Session()->put('Cart', $newCart);
        } else {
            $req->Session()->forget('Cart');
        }
        return view('frontend.cart.cart');
    }

    public function ViewListCart()
    {
        return view('frontend.cart.list');
    }

    public function DeleteListItemCart(Request $req, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if (Count($newCart->products) > 0) {
            $req->Session()->put('Cart', $newCart);
        } else {
            $req->Session()->forget('Cart');
        }
        return view('frontend.cart.list-cart');
    }


    public function SaveListItemCart(Request $req, $id, $quanty)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id, $quanty);

        $req->Session()->put('Cart', $newCart);

        return view('frontend.cart.list-cart');
    }
}
