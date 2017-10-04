@extends('layouts.master')

@section('title', "| Oglasi")
@section('content')
     <div class="col-sm-8 blog-main">
	 <p><strong>Molim vas da postavite profilnu sliku tako što ćete da kliknete na Logovanje, a zatim na profil. Hvala</strong></p>
	 <hr>
	 @if(Auth::check())
		<a href="{{ url('/posts/create') }}"><button type="button" class="btn btn-primary btn-block">Postavi svoj oglas</button></a>
	@else 
		<p>Ukoliko želite da postavite svoj oglas neophodno je da se registrujete ili da se ulogujete ukoliko ste već registrovani. 
		Kada se ulogujete na ovom istom mestu otvoriće se formular za unos oglasa.  </p>         
    @endif
		<hr>	   
		@foreach($posts as $post)
				  @include('posts.post')
		@endforeach

          <nav>
            <ul class="pager">
              <li><a href="#">Prethodna stranica</a></li>
              <li><a href="#">Naredna stranica</a></li>
            </ul>
          </nav>

    </div><!-- /.blog-main -->
   
@endsection

