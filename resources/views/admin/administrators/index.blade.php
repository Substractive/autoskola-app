
@extends('layouts.app')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{__("Administratori")}}</h1>
    <div class="row mb-2">
        <div class="col-12">
            <a href="{{route('administrator_create')}}" class="btn btn-primary float-right" style="color:#fff">{{__("Novi administrator")}}</a>
        </div>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{__("Popis administratora")}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>{{__("Ime")}}</th>
                        <th>{{__("E-pošta")}}</th>
                        <th>{{__("Akcije")}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($administrators as $user)
                        <tr>
                            <td>{{$user->getNameAttribute()}}</td>
                            <td>{{$user->getEmailAttribute()}}</td>
                            <td>
                                <a href="{{route('admin_update',$user->getIdAttribute())}}" class="btn btn-primary btn-sm shadow-sm" role="button"><i class="fas fa-eye text-gray-300"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
