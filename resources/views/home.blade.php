@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row pl-md-5 p-sm-4 bg-white">
            <div class="col-md-12 mb-5">
                <h1 class="text-dark mb-3 mt-4"> Dashboard</h1>

                <h5> Welcome <span class="text-danger"> {{ $user->name }}</span>, here's all your listings </h5>
            </div>

            <div class="col-md-12 mb-5">
                <button class="btn btn-dark btn-lg shadow" data-toggle="modal" data-target="#addListing">
                    <i class="fa fa-plus"></i>
                    Add New Listing
                </button>
                @include('includes.add-listings')

                <span class="float-right">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-lg shadow">
                        <i class="fa fa-lock"></i>
                        Logout
                    </button>
                </form>
                </span>

            </div>
        </div>
        <!--cars listing -->
        <div class="row pl-md-5 p-sm-5 mt-5">
            @if ($listings->count() > 0)
                @foreach($listings as $item)
                    <div class="col-md-3 mb-5">
                        <div class="card shadow">
                            <img src="{{ $item->getUrl() }}" class="img-fluid imageThumb" alt="image">
                            <div class="card-body">
                                <div class="mb-4">
                                    <strong>{{ $item->maker }} {{ $item->model }} </strong><br>
                                    <strong> Year :</strong> {{ $item->year }} <br>
                                    <strong class="text-muted mb-3">{{ $item->created_at }} </strong><br>
                                </div>

                                <div>
                                    <strong>Price</strong> {{ $item->price }} <br>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-6 col-sm-6">
                                        <strong> Add By :</strong> {{ $item->user->name }}
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <a href="/delete-item/{{ $item->uuid }}"
                                           class="btn btn-danger delete btn-block"> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item end-->
                @endforeach
            @else
                <div class="col-md-6 offset-3">
                    <div class="card shadow-sm">
                        <i class="fa fa-warning fa-5x text-danger text-center mt-5 mb-3"></i>
                        <h4 class="text-danger text-center">
                            You dont have items in your list
                        </h4>

                        <small class="mt-5 text-muted">
                        </small>
                    </div>
                </div>
            @endif

            <div class="col-md-12">
                <div class="text-center mb-5">
                    {{ $listings->links() }}
                </div>
            </div>


        </div>
    </div>
@endsection
