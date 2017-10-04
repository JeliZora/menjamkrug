 <!DOCTYPE html>
<html lang="en">
 @include('layouts.header')
 
 @yield('headerdodatak')
 <title> KRUG  @yield('title')</title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->
 
<body>
 
     @include('layouts.nav')

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">MENJAM KRUG</h1>
        <p class="lead blog-description">Ovo je sajt za razmenu zbirki, knjiga, udzbenika, lektire. Na ovom sajtu mozete takodje i da objavite da prodajete knjigu ili da je kupujete. Mozete da objavite da vam je potrebna lektira da je procitate pa onda vratite i sl. Ukoliko vam neka knjiga vise ne treba mozete da objavite da je poklanjate.</p>
      </div>
	  
		@include('partials._messages')
	  
        @yield('content')
		@yield('scripts')
		
    </div><!-- /.container -->
    

    @include('layouts.footer')

 </body>
</html>
