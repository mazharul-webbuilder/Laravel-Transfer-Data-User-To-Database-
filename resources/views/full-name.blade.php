@extends('master')
@section('title')
    Full Name Maker Page
@endsection

@section('section-one')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center text-secondary">Full Name</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('fullName')}}" method="post">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-md-3">First Name</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Last Name</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Full Name</div>
                                    <div class="col-md-9">
                                        <input disabled type="text" class="form-control bg-light" value="{{Session::get('message')}}">
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

