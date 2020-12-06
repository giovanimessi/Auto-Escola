<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @extends('layouts.template')
  @section('title', 'TELA DE LOGIN')

  @section('content')
  <div class="area1">
    <div class="container">
        <h2 class="titulo">LOGIN</h2>
    <form action="" method="POST">
    
    <div class="form-group">
     <label for="inputUser">Email</label>
     <input type="user" id="inputUser" placeholder="Usuario" class="form-control"/>
    </div>
  
    <div class="form-group">
     <label for="inputPassword">Senha</label>
     <input type="password" class="form-control" id="inputPassword"placeholder="Senha">
    </div>
    <button type="submit" class="btn btn-info btn-block">Login</button>
    </div>
  
    </form>
    <a class="gray padding">@2020</a>
</div>
  @endsection