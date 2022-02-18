<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            สวัสดี {{Auth::user()->name}} ยินดีต้อนรับสู่ ระบบชงโคคาร์แคร์
            <!-- <b class="float-end">จำนวนผู้ใช้ระบบ{{count($users)}} คน </b> -->

        </h2>
    </x-slot>
    <div class="container my-4">

        <p class="font-weight-bold">ระบบชงโคคาร์แคร์วิทยาลัยเทคนิคพังงา</p>
        <a class="btn btn-primary me-2" href="https://codeload.github.com/vebyobit15/basic-tanny/zip/refs/heads/main" target="_blank" role="button">Download Project<i class="fa fa-download"></i></a>
        <a class="btn btn-dark me-2" target="_blank" href="https://github.com/vebyobit15/basic-tanny" role="button">GitHub <i class="fa fa-github ms-2"></i></a>
        <a class="btn btn-danger me-2" href="{{ route('creator') }}" role="button">Creator</a>
        <hr class="mb-5"/>
      
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
      
          <!--Controls-->
          <div class="carousel-item active">
      
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-2">
                  <div class="card-body">
                    <h6 class="card-title">ติดต่อผู้ดูแล pattarapontan@gmail.com</h6>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
</x-app-layout>
 