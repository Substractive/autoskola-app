
@extends('layouts.app')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">{{__("Škole")}}</h1>
<div class="row mb-2">
    <div class="col-12">
        <a href="{{route('skola_create')}}" class="btn btn-primary float-right" style="color:#fff">{{__("Nova škola")}}</a>
    </div>
</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{__("Popis škola")}}</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>{{__("Naziv")}}</th>
                    <th>{{__("OIB")}}</th>
                    <th>{{__("Broj polaznika")}}</th>
                    <th>{{__("Tel")}}</th>
                    <th>{{__("Paket")}}</th>
                    <th>{{__("Akcije")}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($schools as $school)
                <tr>
                    <td>{{$school->getName()}}</td>
                    <td>{{$school->getOibAttribute()}}</td>
                    <td>{{$school->getNumberOfPupils()}}</td>
                    <td>{{$school->getPhone()}}</td>
                    <td>{{$school->getPackage()->name}}</td>
                    <td></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
