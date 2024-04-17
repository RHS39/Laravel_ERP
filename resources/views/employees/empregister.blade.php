
@extends('layouts.master')
@section('content')

<div class="main-wrapper">
        <div class="account-content">
            <div class="container">
                <!-- Account Logo -->
</br>
                
                <!-- /Account Logo -->
                <div class="card-body">
                    <div class="account-wrapper">
                        <h3 class="account-title">Enroll New Employee</h3>
                        
                        <!-- Account Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Full Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Date of Birth</label>
                                
                                <input class="form-control datetimepicker" type="text" id="dob" name="DOB"   placeholder="DD/MM/YYYY">
                            </div>
                            
                            <div class="form-group">
                                <label>Date of Joining</label>
                                <input class="form-control datetimepicker" type="text" id="dob" name="doj"  placeholder="DD/MM/YYYY">
                            </div>
                            
                            <div class="form-group">
                                <label>Mobile No</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="mobile" value="{{ old('name') }}" placeholder="Enter Mobile No">
                            </div>

                            <div class="form-group">
                                <label>Aadhar No</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="adhar" value="{{ old('name') }}" placeholder="Enter Aadhar No">
                            </div>
     
                            <div class="form-group">
                                <label>PAN No</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="pan" value="{{ old('name') }}" placeholder="Enter PAN no">
                            </div>
     

                            <div class="form-group">
                                <label>UAN No</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="pan" value="{{ old('name') }}" placeholder="Enter EPFO UAN no">
                            </div>
     




                                    {{-- insert defaults --}}
                            <input type="hidden" class="image" name="image" value="photo_defaults.jpg">

</br>                            
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Register</button>
                            </div>
                        </form>
                        <!-- /Account Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
