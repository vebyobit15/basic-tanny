<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            แบบฟอร์มกรอกข้อมูล
        </h2>
    </x-slot>
    <br>
    <div class="container col-md-8 ">
            @if(session("success"))
            <div class="alert-success">{{session('success')}}</div>
            @endif
            <div class="card ">
            <div class="card-header">แบบฟอร์ม</div>
            <div class="card-body">
            <form action="{{route('addservice')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- ประเภทรถ -->
            <div class="form-group">
                <label for="service_cartype">ประเภทรถ</label>
                <input type="text" class="form-control" name="service_cartype">
                <i><u>ประเภท1:รถยนต์   ประเภทที่2:รถจักรยานยนต์ ประเภทที่3:รถอื่นๆ</u></i>
            </div>
            @error('service_cartype')
            <span class="text-danger my-2">{{$message}}</span>
            @enderror
            <!-- ยี่ห้อรถ -->
            <div class="form-group">
                <label for="service_cartype">ยี่ห้อรถ</label>
                <input type="text" class="form-control" name="service_carbrand">
            </div>
            @error('service_carbrand')
            <span class="text-danger my-2">{{$message}}</span>
            @enderror
            <!-- สีรถ -->
            <div class="form-group">
                <label for="service_carcolor">สีรถ</label>
                <input type="text" class="form-control" name="service_carcolor">
            </div>
            @error('service_carcolor')
            <span class="text-danger my-2">{{$message}}</span>
            @enderror
            <!-- เลขทะเบียนรถ -->
            <div class="form-group">
                <label for="service_carnumber">เลขทะเบียนรถ</label>
                <input type="text" class="form-control" name="service_carnumber">
            </div>
            @error('service_carnumber')
            <span class="text-danger my-2">{{$message}}</span>
            @enderror
            <!-- เลขบัตรประชาชน -->
            <div class="form-group">
                <label for="customer_name">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" name="customer_number">
            </div>
                @error('customer_number')
                <span class="text-danger my-2">{{$message}}</span>
                @enderror
            <!-- ชื่อผู้ใช้บริการ -->
            <div class="form-group">
                <label for="customer_name">ชื่อผู้ใช้บริการ</label>
                <input type="text" class="form-control" name="customer_name">
                </div>
                @error('customer_name')
                    <span class="text-danger my-2">{{$message}}</span>
                @enderror
                <!-- เบอร์โทรศัพท์ -->
                <div class="form-group">
                <label for="customer_telnumber">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" name="customer_telnumber">
                </div>
                @error('customer_telnumber')
                    <span class="text-danger my-2">{{$message}}</span>
                @enderror
                <!-- ค่าใช้จ่ายการใช้บริการ -->
                <div class="form-group">
                <label for="service_price">ค่าใช้จ่ายการใช้บริการ</label>
                <input type="text" class="form-control" name="service_price">
                </div>
                @error('service_price')
                    <span class="text-danger my-2">{{$message}}</span>
                @enderror
                <!-- รูปภาพ -->
                <div class="form-group">
                <label for="service_image">ภาพประกอบ</label>
                <input type="file" class="form-control" name="service_image">
                </div>
                @error('service_image')
                    <span class="text-danger my-2">{{$message}}</span>
                @enderror
                <br>
                <input type="submit" value="บันทึก" class="btn btn-success">
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
 