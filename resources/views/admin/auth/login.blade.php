@extends('admin.layouts.layouts')

@section('title')
    Login
@endsection

@section('auth-page')
<style>
    .logo-img:hover {
        color: #F24822;
    }
</style>
    <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
            <div class="row">
                <div class="col-xl-7 col-xxl-8" style="background-color: #0F4C75;">
                    <a href="/"
                       class="text-nowrap logo-img text-bg d-block px-4 py-9 w-100"
                       style="color: #FFFFFF; text-decoration: none; font-weight: bold; transition: color 0.3s;"
                       onmouseover="this.style.color='#F24822';"
                       onmouseout="this.style.color='#FFFFFF';">
                        <span>Admin Aneka Bus</span>
                    </a>
                    <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                        <img src="{{ asset('images/carousel/carousel-1.jpg')}}" alt="" class="img-fluid" style="border-radius:1.5rem;" width="500">
                    </div>
                </div>
            </div>

                <div class="col-xl-5 col-xxl-4">
                    <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                        <div class="col-sm-8 col-md-6 col-xl-9">
                            <h2 class="mb-3 fs-7 fw-bolder">Welcome to Admin Aneka Bus</h2>
                            <p class=" mb-9">Login to Your Account to Explore the Feature!</p>
                            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input style="background-color: #F24822; border-color: #F24822;" class="form-check-input primary" name="remember" type="checkbox"
                                            value="" id="flexCheckChecked"  checked>
                                        <label class="form-check-label text-dark" for="flexCheckChecked">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn w-100 py-8 mb-4 rounded-2" style="background-color: #F24822; border-color: #F24822; color:#FFFFFF">
                                    Sign In
                                </button>
                                                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
