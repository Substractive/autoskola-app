@extends('layouts.app')
@section('content')
@include('messages.flash')
    <?php /** @var \App\Models\Contracts\UserInterface $administrator */ ?>

    <h1 class="h3 mb-2 text-gray-800">{{__("Ažuriranje administratora")}}</h1>
    <div class="row mb-2">
        <div class="col-12">
            <a href="{{route('administrator')}}" class="btn btn-primary" style="color:#fff"> <i class="fa fa-arrow-left"></i>  {{__("Administratori")}}</a>
        </div>
    </div>

    <div class="panel panel-default mt-3">
        <div class="panel-body">
            <div class="row">
                <div class="col-12">
                    <form role="form" method="post" action="{{route('store_admin')}}">
                        @csrf
                        <input value="{{$administrator->getIdAttribute()}}" type="hidden" name="administrator[{{\App\Models\Contracts\UserInterface::KEY_ID}}]"/>
                        <div class="form-group">
                            <label>Ime i prezime</label>
                            <input name="administrator[{{\App\Models\Contracts\UserInterface::KEY_NAME}}]" value="{{$administrator->getNameAttribute()}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>E-pošta</label>
                            <input name="administrator[{{\App\Models\Contracts\UserInterface::KEY_EMAIL}}]" class="form-control" placeholder="Enter text" value="{{$administrator->getEmailAttribute()}}">
                        </div>
                        <div class="form-group">
                            <label>Lozinka</label>
                            <input name="administrator[{{\App\Models\Contracts\UserInterface::KEY_PASSWORD}}]" class="form-control" placeholder="Enter text">
                        </div>

                        <div class="form-group">
                            <label>Dodaj na školu</label>
                            <select name="school" class="form-control">
                                @foreach($schools as $school)
                                    @if($administrator->getIdAttribute() == $school->getAdministratorAttribute()->getIdAttribute())
                                        <option selected value="{{$school->getIdAttribute()}}">{{$school->getNameAttribute()}}</option>
                                    @else
                                        <option  value="{{$school->getIdAttribute()}}">{{$school->getNameAttribute()}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Spremi</button>
                        <button type="reset" class="btn btn-danger btn-block">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
@endsection
