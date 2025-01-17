@extends('main')

@section('content')
    <section class="inner-banner my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-5">
                    <div class="form-info">
                        <h2>PLEASE FILL OUT THE FORM BELOW</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Display custom message -->
                        @if (session('message'))
                            <div class="alert alert-warning">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-12">
                                <form class="loginForm" id="order-place" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Your First Name *</label>
                                        <input style="color: black" type="text" name="fname" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Last Name *</label>
                                        <input style="color: black" type="text" name="lname" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email *</label>
                                        <input style="color: black" type="email" name="email" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Password *</label>
                                        <input style="color: black" type="password" name="password" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password *</label>
                                        <input style="color: black" type="password" name="password_confirmation"
                                            class="form-control" required>
                                    </div>
                                    <!-- Role Selection -->
                                    <div class="form-group">
                                        <label>Role *</label>
                                        <select name="role" style="color: black" class="form-control" dropdown required>
                                            <option value="2" style="color: black;">User</option>
                                            <option value="3" style="color: black;">Employee</option>
                                        </select>
                                    </div>
                                    <input type="submit" style="color: black; background-color:  rgb(47, 143, 239)"
                                        value="REGISTER" class="btn form-btn form-control my-3">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
