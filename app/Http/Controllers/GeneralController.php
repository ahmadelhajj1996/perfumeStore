<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class GeneralController extends Controller
{
    public function getCategories(){
        $categories = Category::with('products')->get();

        foreach ($categories as $category) {
            $category->title = json_decode($category->title, true);
        }
        return response()->json($categories);
    }

    public function getProducts(){
        $products = Product::with('category')->get();

        foreach ($products as $product) {
            $product->title = json_decode($product->title, true);
            $product->description = json_decode($product->description, true);
        }



        return response()->json($products);
    }

    public function getUsers(){
        $users = User::all();
        return response()->json($users);
    }


}
