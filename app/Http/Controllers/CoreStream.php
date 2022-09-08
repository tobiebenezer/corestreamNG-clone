<?php

namespace App\Http\Controllers;

use App\Http\Requests\subscriptionRequest;
use App\Models\Career;
use App\Models\CareerApplication;
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

    public function project()
    {
        return view('pages.project');
    }

    public function software()
    {
        return view('pages.software');
    }

    public function survellance()
    {
        return view('pages.survellance');
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

     /**
      * display all the available vacancy 

      *@return view
      */
      public function vacancy(){
        $vacancy = Career::all();

        return view("pages.career",compact('vacancy'));
      }

       /**
      * submit vacancy application 

      *@return view
      */
      public function submitApplication(Request $request){
          
          $request->validate([
            'name'=> 'required',
            'email'=>'email|required'
            ,'cv'=>'file',
            'career_id'=>'required'
          ]);

         $fileName =$request->file('cv')->getClientOriginalName();//get the original name of the file 
        $imgPath = $request->file('cv')->storeAs('CV',$fileName,'public');//this save file in the storage folder with it original name as provide
              
        $application = CareerApplication::create([
                  'name'=>$request->name,
                  'email'=>$request->email,
                  'phone'=>$request->phone,
                  'path_to_cv'=>"/storage/$imgPath",
                  'career_id' =>$request->career_id
                  ]);
                
                  
        return back();
      }
     
     
}
