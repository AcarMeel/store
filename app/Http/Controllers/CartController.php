<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
class CartController extends Controller
{
    /** show cart, add item, delete item, update item, trash cart, total
    /*Inicializar una variable de tipo array en el constructor
        Si no existe una variable de sesion llamada cart, iniciar la variable y guardar el contenido q tenga el array
        cart es una variable de sesion y $cart es una variable local a la q se le asgina el valor de cart
    */
    public function _construct()
    {
        if (!\Session::has('cart')) {
            \Session::put('cart',array());
        }
    }

    //Show cart Mostrar carrito de compras.
    public function show()
    {
        
        $cart = \Session::get('cart');//crear variable de sesion y guardarla en la variable local $cart
        $total = $this->total();
        return view('store.cart',compact('cart','total'));//mostrarla,compact — Create array containing variables and their values 
    }

    //add item
    public function add(Product $product)
    {
        $cart = \Session::get('cart');//crear variable de sesion.
        $product->quantity = 1;//definir de manera predeterminada q el carrito contiene 1 item.
        $cart[$product->slug] = $product;//este slug nos funciona como indice. Guardamos lo q trae la var $product en la var de sesion en la posicion del slug.
        \Session::put('cart',$cart);//actualizar variable de sesion con datos de la vaiable local
        return redirect()->route('cart-show');
    }

    //delete item
    public function delete(Product $product)
    {
        $cart = \Session::get('cart');//crear variable de sesion.
        unset($cart[$product->slug]);//unset() destroys the specified variables.
        \Session::put('cart',$cart);//actualizar variable de sesion con datos de la vaiable local
        return redirect()->route('cart-show'); 
    }

    //trash cart
    public function trash()
    {
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }
    
    //update item
    public function update(Product $product,$quantity)
    {
        $cart = \Session::get('cart');//crear variable de sesion.
        $cart[$product->slug]->quantity = $quantity;//asginar la cant q el usuario eligio al array de var local
        \Session::put('cart',$cart);//actualizar variable de sesion con datos de la vaiable local
        return redirect()->route('cart-show'); 
    }

    //total
    private function total()
    {
        $cart = \Session::get('cart');//crear variable de sesion.
        $total = 0;
        foreach((array) $cart as $item) {
            $total += $item->price * $item->quantity;
        }
        return $total;
    }
    

}
