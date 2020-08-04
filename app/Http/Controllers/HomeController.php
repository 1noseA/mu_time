<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function home()
    // {
    //     return view('home');
    // }

    public function home($file_name = "counter.txt")
    { 
        if (file_exists($file_name)) { 
   
          $handle = fopen($file_name, "r");
          $count = (int)fread($handle, 20) + 1;
   
          $handle = fopen($file_name, 'w');
          fwrite($handle, $count);
   
          fclose($handle); 
        } else { 
            $handle = fopen($file_name , "w+"); 
   
            $count = 1; 
         
            fwrite($handle, $count); 
            fclose($handle); 
        } 
         
        $data = ['msg'=>'あなたは ' .$count .' 人目の訪問者です。'];
        return view('home', $data);
    }

    public function count(){
        $count = new count;
        $count->user_id = Auth::id();
        $count->save();
        return redirect('/', compact('count'));
    }
}
