{{-- Images --}}

@extends('home')
@section('content')

<div class="col-lg-12 container" id="images">
    @foreach ($produits as $produit)

    <div class="col-lg-4 col-md-2 column productbox float-left">
        <img src="{{asset('produits/' . $produit->photo_principale)}}" class="img-fluid" style="height: 270px">
        <div class="producttitle"> {{$produit->nom}} </div>
        <div class="producttext"> {{$produit->description}} </div> <br>
        <span class="badge badge-info"> <a href=" {{route('voir_produit_par_cat' , ['id' => $produit->category->id])}} " style="color: #000 ;"> {{$produit->category->nom}} </a> </span>
        <div class="d-flex justify-content-between align-items-center">
            <span class="price">{{ $produit->prixTTC() }} fcfa</span>
            <a href=" {{ route('voir_produit' , ['id' => $produit->id]) }} " class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
        </div>
    </div>

    @endforeach

</div>

@endsection
