@extends('site.layouts.app')

@section('title')
    اتصل بنا
@endsection


@section('content_title')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{getSiteName()}}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('اتصل بنا')}}">اتصل بنا</a></li>

@endsection

@section('content')
    @include('site.layouts.main-toolbar')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container">
      <form action="{{route('store-contact-us')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">الاسم </label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="اكتب اسمك الثلاثي هنا" style="border: 1px solid #ced4da;">
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">البريد الالكتروني</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"  style="border: 1px solid #ced4da;">
        </div>
              
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">رقم الجوال</label>
          <input type="tel" name="tel" class="form-control" id="exampleFormControlInput1"  style="border: 1px solid #ced4da;">
      </div>

      <div class="mb-3">
        <label class="form-label">نوع مستلم الرسالة</label>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="receiverType" id="emadatRadio" value="عمادات">
                    <label class="form-check-label" for="emadatRadio">
                        عمادات
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="receiverType" id="kolyatRadio" value="كليات">
                    <label class="form-check-label" for="kolyatRadio">
                        كليات
                    </label>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mb-3" id="emadatSelect">
        <label class="form-label">اختر عمادة:</label>
        <select name="deanship" class="custom-select" aria-label=".form-select example">
            <option selected value="">اختر من القائمة</option>
            <option value="عمادة الشؤون الإدارية">عمادة الشؤون الإدارية</option>
            <option value="عمادة الشؤون الأكاديمية">عمادة الشؤون الأكاديمية</option>
            <option value="عمادة القبول والتسجيل">عمادة القبول والتسجيل</option>
        </select>
    </div>
    
    <div class="mb-3" id="kolyatSelect" style="display: none;">
        <label class="form-label">اختر كلية:</label>
        <select  name="faculty" class="custom-select" aria-label=".form-select example">
            <option selected value=""> اختر من القائمة </option>
            <option value="كلية الحاسبات">كليةالحاسبات</option>
            <option value="كلية التربية">كليةالتربية</option>
            <option value="كلية الرياضة">كلية الرياضة </option>
        </select>
    </div>
    
   
    
    <script>
        // Get references to the radio buttons and select menus
        const emadatRadio = document.getElementById('emadatRadio');
        const kolyatRadio = document.getElementById('kolyatRadio');
        const emadatSelect = document.getElementById('emadatSelect');
        const kolyatSelect = document.getElementById('kolyatSelect');
        
        // Add event listeners to the radio buttons
        emadatRadio.addEventListener('change', function() {
            if (this.checked) {
                emadatSelect.style.display = 'block';
                kolyatSelect.style.display = 'none';
            }
        });
        
        kolyatRadio.addEventListener('change', function() {
            if (this.checked) {
                emadatSelect.style.display = 'none';
                kolyatSelect.style.display = 'block';
            }
        });
    </script>
    

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">عنوان الرسالة</label>
          <input type="text" class="form-control" name="subject" id="exampleFormControlInput1" style="border: 1px solid #ced4da;">
      </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">نص الرسالة</label>
          <textarea class="custom-textarea form-control" name="body"  id="exampleFormControlTextarea1" ></textarea>
        </div>
       
      <div class="mb-3">
          <button type="submit" class="btn btn-primary btn-lg "style="padding: 20px 20x;  font-size: 1.5rem;">إرسال الرسالة</button>
      </div>
      </form>
  </div>

    <!-- Start Brand Area  -->
    @include('site.layouts.brand')
    <!-- End Brand Area  -->
@endsection
