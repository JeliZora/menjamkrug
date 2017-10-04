@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
		
            {{ $user->name }}<img src="uploads/avatars/{{ $user->slika }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }},  ovo je Vaš profil</h2>
		
            <form enctype="multipart/form-data" action="{{route('profile')}}" method="POST">
                <label>Ukoliko želite, možete da promenite profilnu sliku ( Kliknite na odaberi datoteku, a zatim na Pošalji).</label>
                <input type="file" name="slika">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
