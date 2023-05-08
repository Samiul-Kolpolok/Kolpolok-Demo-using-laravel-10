<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    
    public function add(Request $request)
    {
        //return $request->all();

        Subscriber::create($request);

        return back();
    }

    public function showSubscriber()
    {
        return view('admin.pages.showSubscriber',[
            'subscribers' => Subscriber::orderBy('id','DESC')->get(),
            ]);
    }

    public function editSubscriber($id)
    {
        return view('admin.pages.editSubscriber',[
            'subscriber' => Subscriber::find($id),
            ]);
    }

    public function updateSubscriber(Request $request,$id)
    {
        Subscriber::updatesub($request,$id);
        return redirect('/show-subscriber');
        
    }

    public function deleteSubscriber($id){

        Subscriber::deleteSub($id);
        return redirect('/show-subscriber');
    }
}
