@extends('layout')
@section('content')




<h1>clients</h1>


<!-- #6 on affiche ds la vue client une list de prenom mais en dur 
<ul>
    <li>jean</li>
    <li>marc</li>
    <li>vivi</li>
</ul> -->



<!-- #8  on recupere les donne et afiiche -->


<ul>
  <?php  /* foreach ($clients as $client ):   ?>
  <li> <?= $client ?> </li>
  <?php endforeach */ ?>
</ul>


<!-- #9 meme chose avec la syntaxe de blade  -->
<ul>
  @foreach($data as $client )
  <li>{{$client->name}}</li>
  @endforeach
</ul>
<hr>


{{-- #26formulaire --}}
<form action="/clients" method="post">

  {{-- #28 --}}
  @csrf
  <div class="form-group">
    {{-- 31message d error  --}}
    <input type="text" name="pseudo" id="pseudo" class="form-control @error('pseudo') is-invalid @enderror">


    {{-- 32 si erreur de input pseodo alor fait ca --}}
    @error('pseudo')
    <div class="invalide-feedback">

      
      {{-- 33 cherche ds la variable errorle 1er msg d  lerruer pour pseudo  --}}
      {{$errors->first('pseudo')}}
    </div>

    @enderror
  </div>


  <button type="submit" class="btn btn-primary">ajouter le client </button>
</form>


@endsection