@extends('layout.app')

@section('content')
  <div class="add-profile-box">
    <div class="box-profile plus">
        <a href="#"><img src="../dist/img/VectorSmartObjec-1.svg" alt=""></a>
        <p>Add New Profile</p>
    </div>
    @for ($i = 0; $i < 8; $i++)
        <div class="box-profile">
            <a href="#"><img class="img-edit" src="../dist/img/VectorSmartObjec-2.svg" alt=""></a>
            <p class="profile-title">Very Large Company Name</p>
            <p class="profile-hint">Ven Balance <span class="venAmount">10000</span></p>
        </div>
    @endfor
  </div>

@endsection