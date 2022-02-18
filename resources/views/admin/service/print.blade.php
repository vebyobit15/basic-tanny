<body onLoad="window.print()">
<x-app-layout>
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="card">
                        <div class="card-body">
                            @csrf
                                <!-- ประเภทรถ -->
                                <div class="form-group">
                                <label for="service_cartype">ประเภทรถ</label>
                                <input disabled type="text" class="form-control" name="service_cartype" value="{{$service->service_cartype}}" placeholder="{{$service->service_cartype}}">
                                </div>
                                @error('service_cartype')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <!-- ยี่ห้อรถ -->
                                <div class="form-group">
                                <label for="service_cartype">ยี่ห้อรถ</label>
                                <input disabled type="text" class="form-control" name="service_carbrand" value="{{$service->service_carbrand}}" placeholder="{{$service->service_carbrand}}">
                                </div>
                                @error('service_carbrand')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <!-- สีรถ -->
                                <div class="form-group">
                                <label for="service_carcolor">สีรถ</label>
                                <input disabled type="text" class="form-control" name="service_carcolor" value="{{$service->service_carcolor}}" placeholder="{{$service->service_carcolor}}">
                                </div>
                                @error('service_carcolor')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <!-- เลขทะเบียนรถ -->
                                <div class="form-group">
                                <label for="service_carnumber">เลขทะเบียนรถ</label>
                                <input disabled type="text" class="form-control" name="service_carnumber" value="{{$service->service_carcolor}}" placeholder="{{$service->service_carnumber}}">
                                </div>
                                @error('service_carnumber')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <!-- เลขบัตรประชาชน -->
                                <div class="form-group">
                                <label for="customer_name">เลขบัตรประชาชน</label>
                                <input disabled type="text" class="form-control" name="customer_number" value="{{$service->customer_number}}" placeholder="{{$service->customer_number}}">
                                </div>
                                @error('customer_number')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <!-- ชื่อผู้ใช้บริการ -->
                                <div class="form-group">
                                <label for="customer_name">ชื่อผู้ใช้บริการ</label>
                                <input disabled type="text" class="form-control" name="customer_name" value="{{$service->customer_name}}" placeholder="{{$service->customer_name}}">
                                </div>
                                @error('customer_name')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <!-- เบอร์โทรศัพท์ -->
                                <div class="form-group">
                                <label for="customer_telnumber">เบอร์โทรศัพท์</label>
                                <input disabled type="text" class="form-control" name="customer_telnumber" value="{{$service->customer_telnumber}}" placeholder="{{$service->customer_telnumber}}">
                                </div>
                                @error('customer_number')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <!-- ค่าใช้จ่ายการใช้บริการ -->
                                <div class="form-group">
                                <label for="service_price">ค่าใช้จ่ายการใช้บริการ</label>
                                <input disabled type="text" class="form-control" name="service_price" value="{{$service->service_price}}" placeholder="{{$service->service_price}}">
                                </div>
                                @error('service_price')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <!-- รูปภาพ -->
                                @error('service_image')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <br>
                                <input disabled type="hidden" name="old_image" value="{{$service->service_image}}" >
                                <div class="form-group">
                                    <img src="{{asset($service->service_image)}}" alt="" width="130px" height="130px">
                                </div>

                                <!-- วันที่ -->
                                <div class="form-group">
                                <label for="created_at">วันที่บันทึกข้อมูล</label>
                                <input disabled type="text" class="form-control" name="created_at" value="{{$service->created_at}}" placeholder="{{$service->created_at}}">
                                </div>
                                @error('created_at')
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>