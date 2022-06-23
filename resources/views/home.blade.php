<h1>Ciao sono {{$name}} {{$lastname}} </h1>

{{-- se l'utente è loggato scrivo "sei loggato" altrimenti scrivo "loggati" --}}

@if ($isLoggedIn)
    <p>Sei loggato</p>
@else
    <p>Loggati</p>
@endif

{{-- stampo lista studenti
<ul>
    @foreach ($students as $studenti)
        <li> {{ $student['name']}} {{ $student ['lastname']}} </li>
        
    @endforeach
</ul> --}}