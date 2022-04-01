@extends('master')
@section('title')
    Registration Page
@endsection
@section('section-one')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center text-secondary">Student Registration</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('registration-form')}}" method="post">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-md-3">Full Name</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Email</div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-3">Mobile</div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
