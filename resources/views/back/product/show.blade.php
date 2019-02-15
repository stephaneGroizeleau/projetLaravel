@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1><strong>title</strong> :{{$product->title}}</h1>
	<p><strong>Categorie :</strong>{{$product->categorie->name?? 'aucun'}}</p>
        <p><strong>Date de création : </strong> : {{$product->created_at}}</p>
        <p><strong>Date de mise à jour : </strong> : {{$product->updated_at}}</p>
        <p><strong>Status :</strong> : TODO</p>
        <h2>Les produits :</h2>
        <ul>
            <li><strong>Nombre de produit(s) </strong>: {{count($product->product)}}</li>
        @forelse($product->products as $produit)
            <li>{{$produit->title}}</li>
        @empty
        aucun produit
        @endforelse
        </ul>
    </div>
    <div class="col-md-6">
    <h2><strong>Image</strong></h2>
    @if(!empty($product->picture))
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
            <img src="{{asset('images/'.$product->picture->link)}}" alt="{{$product->picture->title}}">
            </a>
        </div>
    @endif
    </div>
</div>
@endsection 
    