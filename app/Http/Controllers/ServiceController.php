<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function index(){
        $service=Service::paginate(3);
        return view('admin.service.index',compact('service'));
    }
    public function form(){
        $service=Service::paginate(10);
        return view('admin.service.form',compact('service'));
    }
    public function print($id){
        $service = service::find($id);
        return view('admin.service.print',compact('service'));
    }
    public function edit($id){
        $service = service::find($id);
        return view('admin.service.edit',compact('service'));
    }
    public function creator(){
        $service=Service::paginate(10);
        return view('admin.service.creator',compact('service'));
    }

//อัพเดข้อมูลservice-----------------------------------------
public function update(Request $request , $id){
    $request->validate([
        'service_cartype'=>'required|max:1',
        'service_carnumber'=>'required|max:7',
        'service_carbrand'=>'required|max:20',
        'service_carcolor'=>'required|max:20',
        'customer_number'=>'required|max:13',
        'customer_name'=>'required|max:30',
        'customer_telnumber'=>'required|max:10',
        'service_price'=>'required|max:10',
        'service_image'=>'required|mimes:jpg,jpeg,png',
    ]
    );
    $service_image = $request->file('service_image');
    if($service_image){
    $name_gen=hexdec(uniqid());
    $img_ext = strtolower($service_image->getClientOriginalExtension());
    $img_name = $name_gen.'.'.$img_ext;
    $upload_location = 'image/services/';
    $full_path = $upload_location.$img_name;
    $update = Service::find($id)->update([
        'service_cartype'=>$request->service_cartype,
        'service_carnumber'=>$request->service_carnumber,
        'service_carbrand'=>$request->service_carbrand,
        'service_carcolor'=>$request->service_carcolor,
        'customer_number'=>$request->customer_number,
        'customer_name'=>$request->customer_name,
        'customer_telnumber'=>$request->customer_telnumber,
        'service_price'=>$request->service_price,
        'service_image'=>$full_path,
        'created_at'=>Carbon::now()
    ]);
    $service_image->move($upload_location,$img_name);
    return redirect()->route('service')->with('success',"อัพเดตข้อมูลเรียบร้อยแล้ว");
    }else{
    $update = Service::find($id)->update([
        
        'service_cartype'=>$request->service_cartype,
        'service_carnumber'=>$request->service_carnumber,
        'service_carbrand'=>$request->service_carbrand,
        'service_carcolor'=>$request->service_carcolor,
        'customer_number'=>$request->customer_number,
        'customer_name'=>$request->customer_name,
        'customer_telnumber'=>$request->customer_telnumber,
        'service_price'=>$request->service_price,
        'created_at'=>Carbon::now()
]);
}
}
//อัพเดข้อมูลservice-----------------------------------------
//เพิ่มข้อมูล-------------------------------------------------
    public function store(Request $request){
    $request->validate([
        'service_cartype'=>'required|max:1',
        'service_carnumber'=>'required|max:7',
        'service_carbrand'=>'required|max:20',
        'service_carcolor'=>'required|max:20',
        'customer_number'=>'required|max:13',
        'customer_name'=>'required|max:30',
        'customer_telnumber'=>'required|max:10',
        'service_price'=>'required|max:10',
        'service_image'=>'required|mimes:jpg,jpeg,png',
    ]
    );
    $service_image = $request->file('service_image');
    if($service_image){
    $name_gen=hexdec(uniqid());
    $img_ext = strtolower($service_image->getClientOriginalExtension());
    $img_name = $name_gen.'.'.$img_ext;

    $upload_location = 'image/services/';
    $full_path = $upload_location.$img_name;
    Service::insert([
        'service_cartype'=>$request->service_cartype,
        'service_carnumber'=>$request->service_carnumber,
        'service_carbrand'=>$request->service_carbrand,
        'service_carcolor'=>$request->service_carcolor,
        'customer_number'=>$request->customer_number,
        'customer_name'=>$request->customer_name,
        'customer_telnumber'=>$request->customer_telnumber,
        'service_price'=>$request->service_price,
        'service_image'=>$full_path,
        'created_at'=>Carbon::now()
    ]);
    $service_image->move($upload_location,$img_name);
    return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
}else{
    Service::insert([
        'service_cartype'=>$request->service_cartype,
        'service_carnumber'=>$request->service_carnumber,
        'service_carbrand'=>$request->service_carbrand,
        'service_carcolor'=>$request->service_carcolor,
        'customer_number'=>$request->customer_number,
        'customer_name'=>$request->customer_name,
        'customer_telnumber'=>$request->customer_telnumber,
        'service_price'=>$request->service_price,
        'created_at'=>Carbon::now()
    ]);
    return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
}
}
//เพิ่มข้อมูล---------------------------------------------

//ลบข้อมูล----------------------------------------------
    public function delete($id){
    $img = Service::find($id)->service_image;
    unlink($img);
    $delete = Service::find($id)->delete();
    return redirect()->back()->with('success',"ลบข้อมูลเรียบร้อย");
}
//ลบข้อมูล----------------------------------------------

//เทสๆ------------------------------------------------
public function test(Request $request){
    dd();
}
//เทสๆ------------------------------------------------
public function search(Request $request)
    {
          $name = $request->search;                               //รับค่าจาก $request มา , ส่วน 'search' มาจาก ....
                                                                //... Folders resources/views/product/showAirport.blade.php

        $service = Service::where('customer_number',"LIKE","%{$name}%")->paginate(10);         //Query ข้อมูลแบบมีเงื่อนไข ใช้ Where , ส่วน 'name' ...
                                                                                    //... คือ colums name จาก ตาราง database , ส่วน "LIKE" ...
                                                                                    //... ถ้าเป็น String(ข้อความ) ให้ระบุเป็น Keyword  ....
                                                                                    //... ส่วน % ให้ค้น ชื่อที่ตั้งสนามบินทั้งหมด ทั้งข้างหน้า และ ข้างหลัง
        return view("admin.service.index")
        ->with('service',$service);                                               
        
    }
}
