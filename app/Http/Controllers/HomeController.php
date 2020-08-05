<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $count_all = DB::table('counts')->count();
        $today = Count::whereDate('created_at', Carbon::today())->count();
        $week = Count::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $month = Count::where('created_at', '>=', Carbon::now()->firstOfMonth()->toDateTimeString())->count();
        return view('home', ['count_all' => $count_all, 'today' => $today, 'week' => $week, 'month' => $month], $data);
    }

    public function count(Request $request, Count $count){
        $user = auth()->user();
        $count->storeCount($user->id);
        return back();
    }
}
