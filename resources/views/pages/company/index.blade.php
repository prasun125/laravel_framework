@extends('layouts.master')
@section('title')
    Companies |
@endsection
@section('content')
    <div class="container p-t-6rem">
        {{--<div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Companies
                    </div>
                    <div class="card-body">
                        --}}{{--Coming soon...--}}{{--
                        <router-view name="companiesIndex"></router-view>
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>--}}
        <router-view name="companyIndex"></router-view>
        <router-view></router-view>
    </div>
@endsection
