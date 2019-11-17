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
  <li>{{$client->name}} <em class="text-muted">{{$client->email}}</em></li>
  @endforeach
</ul>
<hr>


{{-- #26formulaire --}}
<form action="/clients" method="post">

  {{-- #28 --}}
  @csrf
  <div class="form-group">
    {{-- 31message d error  --}}
    <input type="text" name="name" placeholder="rentrez un pseudo" id="pseudo"
      class="form-control @error('name') is-invalid @enderror">


    {{-- 32 si erreur de input pseodo alor fait ca --}}
    @error('name')
    <div class="invalide-feedback">


      {{-- 33 cherche ds la variable errorle 1er msg d  lerruer pour pseudo  --}}
      {{$errors->first('name')}}
    </div>

    @enderror
  </div>


  {{-- 36 --}}
  <div class="form-group">
    <input type="email" name="email" placeholder="rentrez un mail " id="email"
      class="form-control @error('email') is-invalid @enderror">

    @error('email')
    <div class="invalide-feedback">


      {{-- 33 cherche ds la variable errorle 1er msg d  lerruer pour pseudo  --}}
      {{$errors->first('email')}}
    </div>

    @enderror
  </div>


  <div class="form-group">
    <select name="status" id="" class="custom-select  @error('status') is-invalid @enderror">
      <option value="1">active</option>
      <option value="0">desactive</option>
    </select>

    @error('status')
    <div class="invalide-feedback">


      {{-- 33 cherche ds la variable errorle 1er msg d  lerruer pour pseudo  --}}
      {{$errors->first('status')}}
    </div>

    @enderror

  </div>

  <button type="submit" class="btn btn-primary">ajouter le client </button>
</form>


@endsection