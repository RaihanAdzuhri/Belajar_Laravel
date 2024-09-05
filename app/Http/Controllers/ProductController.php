<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    

        public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Cek kredensial login
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('products.store')->with('success', 'Login successful.');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You have been logged out.');
    }


    // This method will show products page
    public function index() {
        $products = Product::orderBy('created_at','DESC')->get();

        return view('products.list',[
            'products' => $products
        ]);
    }

    // This method will show create product page
    public function create() {
        return view('products.create');
    }

    // This method will store a product in db
    public function store(Request $request) {
        $rules = [
            'nama' => 'required|min:5',
            'deskripsi' => 'required|min:3',
            'harga' => 'required|numeric'            
        ];

        if ($request->image != "") {
            $rules['gambar'] = 'gambar';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        // here we will insert product in db
        $product = new Product();
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        if ($request->gambar != "") {
            // here we will store image
            $gambar = $request->gambar;
            $ext = $gambar->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to products directory
            $gambar->move(public_path('uploads/products'),$imageName);

            // Save image name in database
            $product->gambar = $imageName;
            $product->save();
        }        

        return redirect()->route('products.index')->with('success','Product added successfully.');
    }

    // This method will show edit product page
    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('products.edit',[
            'product' => $product
        ]);
    }

    // This method will update a product
    public function update($id, Request $request) {
        $product = Product::findOrFail($id);
    
        $rules = [
            'nama' => 'required|min:5',
            'deskripsi' => 'required|min:3',
            'harga' => 'required|numeric'
        ];
    
        if ($request->hasFile('gambar')) {
            $rules['gambar'] = 'image|mimes:jpeg,png,jpg,gif|max:2048'; // Validate image file
        }
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return redirect()->route('products.edit', $product->id)->withInput()->withErrors($validator);
        }
    
        // Update product details
        $product->nama = $request->nama; // Update this based on your database column
        $product->harga = $request->harga; // Same here for price
        $product->deskripsi = $request->deskripsi;
        $product->save();
    
        // Handle image upload if present
        if ($request->hasFile('gambar')) {
            // delete old image
            File::delete(public_path('uploads/products/' . $product->gambar));
    
            // Store new image
            $gambar = $request->file('gambar');
            $ext = $gambar->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; // Unique image name
    
            // Save image to products directory
            $gambar->move(public_path('uploads/products'), $imageName);
    
            // Save image name in database
            $product->gambar = $imageName;
            $product->save();
        }        
    
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    

    // This method will delete a product
    public function destroy($id) {
        $product = Product::findOrFail($id);

       // delete image
       File::delete(public_path('uploads/products/'.$product->gambar));

       // delete product from database
       $product->delete();

       return redirect()->route('products.index')->with('success','Product deleted successfully.');
    }
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

}
