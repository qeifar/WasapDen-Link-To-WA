<?php

namespace App\Http\Controllers;

use App\Whatsapp;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Auth;
use Illuminate\Http\Request;
use DB;
use Form;
use Redirect;

class WhatsappController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
    $models= Whatsapp::all()->where('user_id',Auth::user()->id);

    return view('whatsapp.admin',compact('models','request'));
   }


   public function link($wa_id)
   {
    $m = Whatsapp::all()->where('wa_id',$wa_id)->first();   
       
            $link="https://api.whatsapp.com/send?phone=".$m->phone."&text=".$m->text;

            return Redirect::to($link);
            // return redirect()->$link;
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
    $models= Whatsapp::all();
    // dd($models);
     return view('whatsapp.create',compact('models','request'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
    $data = Input::all();
    $m = new Whatsapp();
    $m->fill($data);
    $m->wa_id = "DEN".sha1(date("Y-m-d-h-i-s"));
    
    $m->save();
   
    return redirect()->route('whatsapp.index');
    
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit(Request $request, $id)
   {
    $models= Whatsapp::find($id);
    return view('whatsapp.edit',compact('request','models','id'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
   {
    $data = Input::all();
    
            // $validator = Validator::make($request->all(), [
            //     // 'pp_name' => 'required|max:255',
            //     // 'pp_state' => 'required|max:255',
            //     // 'pp_district' => 'required|max:255',
            //     // 'active' => 'required|max:1',
            // ]);     
            
            // if ($validator -> fails()) {
            //     return redirect(url(""))
            //                 ->withErrors($validator)
            //                 ->withInput();
            // }
           
            $m = Whatsapp::findOrFail($id);        
            $m -> fill($data);
            $m->wa_id = "DEN".sha1(date("Y-m-d-h-i-s"));
            $m -> save();

            return redirect()->route('whatsapp.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
       //
   }
}
