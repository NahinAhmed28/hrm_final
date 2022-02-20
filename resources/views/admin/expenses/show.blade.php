@extends('admin.layouts.app')
@section('pageTitle',)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom">
                    <div class="card-header">
                        {{--                        <h3 class="card-title">{{$pageTitle}}</h3>--}}
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <a href="{{route('admin.expenses.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>Expenses</a>
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">department name : {{ $expense->itemName }}</h5>
                    <p class="card-text">ID : {{ $expense->id }}</p>
                    <p class="card-text">purchaseDate :{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $expense->purchaseDate)->format('d-m-Y') }}</p>
                    <p class="card-text">purchaseFrom : {{ $expense->purchaseFrom }}</p>
                    <p class="card-text">price : {{ $expense->price }}</p>
                    <p class="card-text">Created : {{ \Carbon\Carbon::parse($expense->created_at)->diffForHumans() }}</p>
                    <p class="card-text">Bill : {{ $expense->bill }}</p>
                    <p class="card-text">status :
                        <span class="badge badge-success">{{$expense->status == 0 ? '' : 'Active' }} </span>
                        <span class="badge badge-danger">{{$expense->status == 1 ? '' : 'Inactive' }}</span>
                    </p>


                </div>
            </div>
        </div>
    </div>
@endsection
