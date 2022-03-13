<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          ข้อมูลการบริการ
      </h2>
</x-slot>
  <div class="py-12">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="search_box pull-right">  
            <form class="" method="get" action="/searchAirport/search">   
            <input type="text" placeholder="ค้นหาตามเลขบัตรประชาชน" name="search" />
            </form>
            </div>
            <div class="card-header">ตารางข้อมูลบริการ</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">เลขบัตรประชาชน</th>
      <th scope="col">เลขทะเบียนรถ</th>
      <th scope="col">รุ่นรถ</th>
      <th scope="col">รูปภาพ</th>
      <th scope="col">บันทึกเมื่อ</th>
      <th scope="col">ค่าใช้จ่าย</th>
      <th scope="col">แก้ไข</th>
      <th scope="col">ลบข้อมูล</th>
      <th scope="col">พิมพ์</th>
    </tr>
  </thead>
  <tbody>
      
      @foreach($service as $row)
    <tr>
      <th>{{$service->firstItem()+$loop->index}}</th>
      <td>{{$row->customer_number}}</td>
      <td>{{$row->service_carnumber}}</td>
      <td>{{$row->service_carbrand}}</td>
      <td>
          <img src="{{asset($row->service_image)}}" alt="" width="70px" height="70px">
      </td>
      <td>
          @if($row->created_at == NULL)
            ไม่ถูกบันทึก
          @else
            {{Carbon\Carbon::parse($row->created_at)->diffForHumans()}}
          @endif
      </td>
      <td>{{$row->service_price}} บาท</td>
      <td>
          <a href="{{url('/service/edit/'.$row->id)}}" class="btn btn-info">ดูข้อมูลเพิ่มเติม/แก้ไข</a>
      </td>
      <td>
          <a href="{{url('/service/delete/'.$row->id)}}" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลบริการนี้หรือไม่')">ลบข้อมูล</a>
      </td>
      <td>
      <a href="{{url('/service/print/'.$row->id)}}" class="btn btn-success">พิมพ์</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$service->links()}}
            </div>
            </div>    
            </div>
        </div>
    </div>
</x-app-layout>
 