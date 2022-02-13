<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Crud;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {        
        return view('customer.dashboard');
    }

    public function DataList()
    {
        $data["crudData"] = Crud::orderBy('id', 'desc')->where('user_id',Auth::user()->id)->get();
         return view('customer.data_list',$data);
    }

    public function DataPost(Request $request){
        $validated = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $post = new Crud;
        $post->user_id = Auth::user()->id;
        $post->f_name = $request->input('first_name');
        $post->l_name = $request->input('last_name');
        $post->email = $request->input('email');
        $post->phone = $request->input('phone');
        $post->save();

        $alart = ['icon'=>'success','heading'=>'Success','loaderBg'=>'#46c35f','message'=>"Data has been saved successfully"];
        return redirect('customer/data-list')->with($alart);
    }

    public function DataUpdate(Request $request){
        $validated = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $task = Crud::findOrFail($request->id);
        $task->user_id = Auth::user()->id;
        $task->f_name = $request->input('first_name');
        $task->l_name = $request->input('last_name');
        $task->email = $request->input('email');
        $task->phone = $request->input('phone');
        $task->save();

        $alart = ['icon'=>'success','heading'=>'Success','loaderBg'=>'#46c35f','message'=>"Data has been updated successfully"];
        return redirect('customer/data-list')->with($alart);
    }

    public function DataDelete(Request $request){        
        Crud::findOrFail($request->id)->delete();
    }
}
