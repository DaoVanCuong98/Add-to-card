<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function customer(){
         return view('dathang');
    }
    public function postcustomer(Request $request){
        $request->validate([
            'name' =>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',


    ],
[
    'name'=>'Tên bắt buộc phải nhập ',
    'email'=>'Email bắt buộc phải nhập ',
    'address'=>'Địa chỉ bắt buộc phải nhập ',
    'phone'=>'SĐT bắt buộc phải nhập ',
]);
        $name = request("name");
        $email = request("email");
        $address = request("address");
        $phone = request("phone");
        $note = request("note");
        DB::table("customers")->insert(["name"=>$name,"email"=>$email,"address"=>$address,"phone"=>$phone,"note"=>$note]);
        
        Mail::send('mail',compact('name'),function($email) use($name){
            $email->subject('Demo test mail');
            $email->to('daovancuong989898@gmail.com',$name);
        });
        
        return redirect('cart');
    }
}
