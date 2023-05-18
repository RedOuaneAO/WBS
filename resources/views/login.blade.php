@extends('layouts.master')
@section('title', 'Login')
@section('content')

    {{-- <section class="mt-5 d-flex justify-content-center" style="padding-inline: 6%">
        <div class="row shadow rounded" style="width:85%;">
            <div class="col-12 col-sm-6 col-md-7 rounded-start px-3" style="background-color: rgb(237, 236, 234)">
                <form action="" method="POST">
                    @csrf
                    <h2 class="text-center my-3">Log<span class="text-danger">In</span></h2>
                    <div class="">
                        <label for="" class="fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="">
                        <label for="" class="fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary form-control my-3 fw-bold">Login</button>
                </form>
            </div>
            <div class="d-sm-inline col-sm-6 col-md-5 d-none rounded-end" style="background:url(./img/img2.jpg);background-size:cover;">
            </div>
        </div>
    </section> --}}
    <!-- Section: Design Block -->

<section class="" style="background:url('./img/waterbg.jpg');background-attachment: fixed; background-size: cover;height:100vh;">
    <!-- Jumbotron -->
    <div class="text-center text-lg-start" >
      <div class="container">
        <div class="row">
          <div class="col-lg-6  mt-5">
            <h1 class="my-5 display-3 fw-bold ls-tight">
                لا تسرف بالماء  <br />
              <span class="text-primary">فالماء أمانة</span>
            </h1>
            <p class="fw-bold text-white">
                في حال قررت الذهاب إلى عطلة، تأكد من إغلاق جميع صنابير المنزل و قم بإغلاق صمام المياه الرئيسي بإحكام ، فحدوث تسرب بسيط و لفترة زمنية طويلة يؤدي إلى ضياع الماء و قد يتسبب في أضرار بالمنزل
            </p>
          </div>
  
          <div class="col-lg-4 mb-5 mt-md-4 mb-lg-0 pt-sm-5 ps-sm-5" >
            <div class="card">
              <div class="card-body" style="background-color: hsl(0, 0%, 96%)">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                  <div class="row p-4">
                  <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" name="email" id="form3Example3" class="form-control" />
                    </div>
    
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" name="password" id="form3Example4" class="form-control" />
                    </div>
    
                    <!-- Checkbox -->
                    {{-- <div class="form-check d-flex justify-content-center mb-4"> --}}
                        {{-- <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked /> --}}
                        {{-- <label class="form-check-label" for="form2Example33">
                        Subscribe to our newsletter
                        </label> --}}
                    {{-- </div> --}}
  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                        Sign up
                    </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
@endsection
