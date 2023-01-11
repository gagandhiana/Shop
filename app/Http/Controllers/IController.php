<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use App\Models\Signup;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Cart;

class IController extends Controller
{
    //*************************************Insert Data******************************************

    public function insert_data(Request $request)
    {
        $add = new Product;
        if ($request->isMethod('post')) {
            $add->category_id = $request->get('cat');
            $add->productName = $request->get('pname');
            $add->model = $request->get('model');
            $add->manufacturer = $request->get('man');
            $add->productPrice = $request->get('price');
            if (!empty($request->file('pimage'))) {
                $file = $request->file('pimage');
                $current = uniqid(Carbon::now()->format('YmdHs'));
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $fullfilename = $current . "." . $file->getClientOriginalExtension();
                $destinationPath = public_path('product_images');
                $file->move($destinationPath, $fullfilename);
                $add->productImage = $fullfilename;
            }
            $add->save();
        }
        return redirect('/addproject');
    }
    //*******************************Views****************************
    public function login_page()
    {
        return view('/login');
    }
    public function contact_us()
    {
        return view('contact');
    }
    public function dis_pro()
    {
        return view('products');
    }
    public function add_project()
    {
        return view('addproduct');
    }
    public function all_products()
    {
        $data = Product::paginate(10);
        return view('allproducts', compact('data'));
    }

    //******************************SignUp******************************
    public function signup_details_submit(Request $request)
    {
        $email = $request->get('email');
        $data = Signup::where(['email' => $email])->first();
        if (!empty($data)) {
            return back()->with('message', 'Email already exists');
        } else {
            $add = new Signup;
            if ($request->isMethod('post')) {
                $add->name = $request->get('name');
                $add->email = $request->get('email');
                $add->password = $request->get('password');
                $add->save();
            }
            return redirect('/homepage');
        }
    }

    //*********************************Login****************************************
    public function login_details_submit(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $data = Signup::where(['email' => $email, 'password' => $password])->first();
        if (!empty($data)) {
            Session::put("user_session", $data->id);
            Session::put("name_session", $data->name);
            return redirect('/homepage');
        } else {
            return back()->with('message', 'Email Or Password Wrong');
        }
    }

    //**********************Log Out***********************
    public function logout_page()
    {
        Session::flush();
        return redirect('login-page');
    }

    //********************************HomePage*********************************
    public function home_page()
    {
        $data = Product::paginate(10);
        $category = Category::paginate(10);
        return view('home', compact('data', 'category'));
    }
    // public function search_product(){}

    //***********************(Display Products)*********************
    public function display_category($id)
    {
        $pro = Product::where('category_id', $id)->get();
        $cat = Category::where('category_id', $id)->get();
        return view('products', compact('pro', 'cat'));
    }

    //*******************************Contact Us(Insert Data)**********************************
    public function contact_us_data(Request $request)
    {
        $add = new Contact;
        if ($request->isMethod('post')) {
            $add->name = $request->get('name');
            $add->email = $request->get('email');
            $add->message = $request->get('mes');
            $add->save();
        }
        return redirect('/contact');
    }

    //****************************************Cart***************************************
    public function my_cart($id)
    {
        $data = Product::select('*')->where(['id' => $id])->get();
        $category = Category::paginate(10);
        return view('cart', compact('data', 'category'));
        // return print_r($data);
    }

    public function add_to_cart(Request $request)
    {
        $price = $request->get('pro_price');
        $qty = $request->get('qty');
        $total = $price * $qty;

        $add = new Cart;
        if ($request->isMethod('post')) {
            $add->productId = $request->get('id');
            $add->manufacturer = $request->get('manufacturer');
            $add->productName = $request->get('productName');
            $add->productImage = $request->get('productImage');
            $add->userId = $request->get('userid');
            $add->userName = $request->get('un');
            $add->quantity = $request->get('qty');
            $add->productPrice = $total;
            $add->save();
        }
        return back();
    }
    public function check_out($id)
    {
        $data = Cart::select('*')->where(['userId' => $id])->get();
        $items=0;
        $sum = 0;
        foreach ($data as $row) {
            $items = $items + 1;
        }
        foreach ($data as $row) {
            $sum = $sum + $row->productPrice;
        }
        $totalprice = $sum;

        return view('checkout', compact('data', 'totalprice', 'items'));
    }

    public function remove($id)
    {
        $ob = Cart::find($id);
        $ob->delete();
        return back();
    }

    //****************************************Display Cart***************************************
    
    public function c_o($id)
    {
        $data = Cart::select('*')->where(['userId' => $id])->get();
        $sum = 0;
        foreach ($data as $row) {
            $sum = $sum + $row->productPrice;
        }
        $totalprice = $sum;
        return view('co', compact('data','totalprice'));
    }

    //****************************************Checkout***************************************

    public function ct(Request $request, $id){
        $add = Signup::select('*')->where(['id' => $id])->first();
        if($request->isMethod('post')){
            $add->address = $request->get('address');
            $add->save();
        }
        return redirect('homepage');
    }
}

// public function search_categogy($id)
//     {
//         $data1 = Category::get();
//         $data = Category::find($id);
//         $a=$data->category_name;
//         return view('all_product',compact('data1'),['images' => Product::where('p_category', 'LIKE','%'. $a .'%')->Paginate()]);
//     }
