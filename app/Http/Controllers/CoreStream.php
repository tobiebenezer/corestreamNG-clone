<?php

namespace App\Http\Controllers;

use App\Http\Requests\subscriptionRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class CoreStream extends Controller
{
    /**
     * The landing page to Core Stream Ng
     * 
     * @return view home page
     */

    public function index()
    {
        return view('pages.home');
    }
    
    /**
     * Get information concerning Core Stream Ng
     * 
     * @return view about page
     */

    public function about()
    {
        return view('pages.about');
    }
    /**
     *Display service of Core Stream Ng
     * 
     * @return view about page
     */

    public function services()
    {
        return view('pages.services');
    }

    /**
     *Send us message to our database Core Stream Ng
     * 
     * @return view about page
     */

    public function contact()
    {
        return view('pages.contact');
    }

    /**
     *Send us message to our database Core Stream Ng
     * 
     * @return view about page
     */

    public function subscription(subscriptionRequest $request)
    {
        try {
            $message = Subscription::create($request->all());

            if($message){
                
                return back();}
            Session::flash('message','message not delivered');

            Session::flash('message','message not delivered');
            return view('pages.contact');
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('message','Something went wrong please try again later');
            return $th;
        }
        
    }

    /**
     * view all message left
     * 
     * @return Subscription  
     */

     public function message(){
         $subscribers = Subscription::where('created_at','>=',Carbon::now()->subdays(15))->paginate();
       
         return view('pages.message',compact('subscribers'));
     }




}
