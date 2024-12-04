<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function index()
    {
        $home = DB::table('home')->get();

        $data = DB::table('products')->where('feature_product', 1)
        ->orderBy('id' , 'desc')
        ->limit(5)
        ->get();

        $gold = DB::table('products')->where('feature_product', 2)
        ->orderBy('id' , 'desc')
        ->limit(5)
        ->get();

        $shoes = DB::table('products')->where('feature_product', 3)
        ->orderBy('id' , 'desc')
        ->limit(5)
        ->get();

        $fancy = DB::table('products')->where('feature_product', 4)
        
        ->orderBy('id' , 'desc')
        ->limit(5)
        ->get();

        $Undergarments = DB::table('products')->where('feature_product', 5)
        ->orderBy('id' , 'desc')
        ->limit(5)
        ->get();

        $bags = DB::table('products')->where('feature_product', 6)
        ->orderBy('id' , 'desc')
        ->limit(5)
        ->get();

        $frock = DB::table('products')->where('feature_product', 7)
        ->orderBy('id' , 'desc')
        ->limit(5)
        ->get();
        // return $data;

        return view("welcome", compact( 'home' , 'data' , 'gold' , 'shoes' ,'fancy' ,'Undergarments' , 'bags' , 'frock'));
    }

    public function about()
    {
        return view("about");
    }

    public function testimonials()
    {
        return view("testimonials");
    }

    public function contact()
    {
        return view("contact");
    }

    public function cloth()
    {
        $product = DB::table('products')->where('feature_product', 1)
        ->get();
        $data = DB::table('products')->where('feature_product', 1)
        ->orderBy('id' , 'desc')
        ->get();


        return view("cloth.cloth" , compact('product' , 'data'));
    }

    public function gold()
    {
        $product = DB::table('products')->where('feature_product', 2)
        ->get();

        $data = DB::table('products')->where('feature_product', 2)
       ->orderBy('id' , 'desc')
        ->get();

        return view("cloth.cloth" , compact('product' , 'data'));

    }

    public function shoes()
    {
        $product = DB::table('products')->where('feature_product', 3)
        ->get();

        $data = DB::table('products')->where('feature_product', 3)
       ->orderBy('id' , 'desc')
        ->get();


        return view("cloth.cloth" , compact('product' , 'data'));
    }

    public function fancy()
    {
        $product = DB::table('products')->where('feature_product', 4)
        ->get();

        $data = DB::table('products')->where('feature_product', 4)
       ->orderBy('id' , 'desc')
        ->get();


        return view("cloth.cloth" , compact('product' , 'data'));
    }

    public function Undergarments()
    {
        $product = DB::table('products')->where('feature_product', 5)
        ->get();

        $data = DB::table('products')->where('feature_product', 5)
       ->orderBy('id' , 'desc')
        ->get();


        return view("cloth.cloth" , compact('product' , 'data'));
    }

    public function bags()
    {
        $product = DB::table('products')->where('feature_product', 6)
        ->get();

        $data = DB::table('products')->where('feature_product', 6)
       ->orderBy('id' , 'desc')
        ->get();


        return view("cloth.cloth" , compact('product' , 'data'));
    }

    public function frock()
    {
        $product = DB::table('products')->where('feature_product', 7)
        ->get();

        $data = DB::table('products')->where('feature_product', 7)
       ->orderBy('id' , 'desc')
        ->get();


        return view("cloth.cloth" , compact('product' , 'data'));
    }



    public function contactus(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        // return $validated;

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->address = $request->input('address');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');
        $contact->email_verified_at = Carbon::now();

        $contact->save();

        return redirect()->back()->with('success', 'Your message has been send!');
    }

    public function blog()
    {
        return view("blog");
    }

    public function privacy_policy()
    {
        return view("privacy-policy");
    }

    public function Banner()
    {

		return view('banners.add_items');

	}


    public function store_banners(Request $request)
    {
        $validated = $request->validate([
            'banners1' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
            'banners2' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
            'banners3' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
            'banners4' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
            'banners5' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
            'banners6' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
            'banners7' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
            'banners8' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
            'banners9' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
            'banners10' => 'nullable|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        $banners = new Banner(); // Use the Banner model

        for ($i = 1; $i <= 10; $i++) {
            $bannerField = 'banners' . $i;

            if ($request->hasFile($bannerField)) {
                $image = $request->file($bannerField);
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/products/'), $imageName);
                $imagePath = 'uploads/products/' . $imageName;

                $banners->$bannerField = $imagePath;
            }
        }

        $banners->save();

        return redirect()->back()->with('success', 'Items have been successfully stored.');
    }


}
