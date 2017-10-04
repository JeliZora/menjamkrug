@extends('layouts.master')
@section('content')
     <div class="col-sm-8 blog-main">
	 <hr>
	<h1>Uputstvo</h1>
	<blockquote>
	<p>1. Registracija</p>
	<p>Registracija nije obavezna. Registracija se obavlja vrlo jednostavno klikom na odgovarajuću ikonu koja se nalazi u gornjem desnom uglu u meniju.
	Kada se otvori strana sa registracijskom formom treba da popunite odgovarajuća polja sa imenom, mejl adresom i lozinkom koja mora da se ponovi.<br>
	VAŽNO: kada se registrujete obavezno se pre napuštanja sajta izlogijte a ne samo da kliknete nakrstić i zatvorite prozor.
	To je važno jer se tako formira u bazi podataka odgovarajući podatak koji će da vam posluži u slučaju da ste zaboravili lozinku.
	Ako to ne uradite sistem nije u mogućnosti da vam pošalje mejl sa linkom za resetovanje.<br>
	Oglase možete da pogledate bez obzira da li ste registrovani ili ne.
	Ukoliko želite da postavite svoj oglas onda morate da se prethodno registrujete, a ako ste već registrovani morate da se ulogujete.</p>
	<p>2. Logovanje</p>
	<p>Ukoliko ste registrovani možete da se ulogujete. Logovanje se vrši na klasičan način. Dakle, kliknete na ikonicu za logovanje u gornjem desnom uglu menija.
	Ukoliko ste ulogovani možete da postavite oglas ili da ostavite komentare ispod pojedinačnih oglasa.
	Oglasi i komentari koje ste ostavili prikazivaće se sa vašim imenom s kojim ste se registrovali i imaće podatak o vremenu kada ste to uradili. 
	Dok ste ulogovani na stranicama za oglase pojavljuje se dugme na koje kada kliknete otvara se forma za postavljanje oglasa. 
	Kada niste ulogovani to dugme se ne pojavljuje.Kada ste ulogovani klikom na naslov pojedinačnog oglasa on se pojavljuje samostalno, a ispod njega je otvorena forma za unos komentara.
	Ukoliko niste ulogovani ta forma se ne vidi.
	Oglase možete da pogledate bez obzira da li ste logovani ili ne.</p>
	<p>3. Oglasi</p>
	<p>Oglase možete da gledate bez obzira da li ste logovani ili ne. Kliknete u meniju na Oglasi i pojavljuju se svi oglasi koji su do sada postavljeni i to u redosledu od najnovijeg pa do najstarijeg.
	Klikom na naslov oglasa, on se prikazuje samostalno.
	Ukoliko želite da postavite oglas morate da se registrujete a ako ste već registrovani onda morate da se ulogujete.
	Kada ste ulogovani pojavljuje se dugme za postavljenje oglasa. Klikom na njega otvara se forma koju treba popuniti.
	Popunite naslov oglasa i sadržaj oglasa kao što sam ja na prvom postu. Dakle u naslovu treba da napišete koja kniga ili zbirka je u pitanju i šta hoćete sa njom,
	npr: "Zbirku Krug 2 prodajem", a u sadržaju navedete detaljniji npr. za koliko i naravno ostavite kontakt.</p>
	<p>4. Kontakt</p>
	<p>Izaberite pažljivo koji kontakt ostavljate. Ja vam preporučujem da ostavite mejl afresu. Možete da ostavite i FB, ili nešto slično. Na kraju možete da ostavite i broj mobilnog, ali budite oprezni.
	Kontakt i ne morate da ostavite već možete da kažete iz kog ste odeljenja i tako da se upoznate u školi.
	Možete da ne ostavite ništa već da tražite da onaj ko je zainteresovani ostavi svoj kontakt u komentaru ispod. Odluka je na vama.</p>
	</blockquote>

          <nav>
            <ul class="pager">
              <li><a href="#">Prethodna stranica</a></li>
              <li><a href="#">Naredna stranica</a></li>
            </ul>
          </nav>

    </div><!-- /.blog-main -->
   
@endsection
