<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ผู้จัดทำโปรแกรม
    </x-slot>
    <div class="container my-4">
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      <li data-target="#multi-item-example" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" >
        <div class="row justify-content-center align-items-center">
          <div class="col-md-4">
            <div class="card mb-2 align-items-center" >
              <img src="image\services\pic\2.jpg" alt="Nature" style="width:200px">
              <div class="card-body">
                <h5 class="card-title">นางสาวญานิศา  นะเอี้ยม</h5>
                <p class="card-text">แผนกวิชาเทคโนโลยีสารสนเทศ ปวส.2 63309010001.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2 align-items-center">
              <img src="image\services\pic\1.jpg" alt="Nature" style="width:200px">
              <div class="card-body">
                <h5 class="card-title">นายภัทรพล  งามจรัส</h5>
                <p class="card-text">แผนกวิชาเทคโนโลยีสารสนเทศ ปวส.2 63309010004.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</x-app-layout>