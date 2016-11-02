@extends('layout') @section('content') @foreach($pessoas as $pessoa)
<div class="col-md-6">
@include('partes.contato')
</div>
@endforeach @endsection