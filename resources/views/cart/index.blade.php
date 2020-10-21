@extends('shop')

@section('content')
    
<main role="main">
    
    <section class="py-5">
        <div class="container">
                <h1 class="jumbotron-heading"> <span class="badge badge-primary ">Votre panier </span></h1>
            <table class="table table-bordered table-responsive-sm">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Qte</th>
                        <th>Prix Unitaire</th>
                        <th>Total TTC</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $produit)
                        <tr>
                            <td>
                                <img width="110" class="rounded-circle img-thumbnail" src="{{asset('/produits/' . $produit->attributes['photo'])}}" alt="{{$produit->attributes['photo']}} ">
                                {{$produit->name}}
                                <p>Taille : {{strtoupper($produit->attributes['size'])}} </p>
                            </td>
                            <td>
                                        <input style="display: inline-block" id="qte" class="form-control col-sm-4" type="number" value="{{$produit->quantity}}">
        
                                        <a  class="pl-2" href=""><i class="fas fa-sync"></i> </a>
                            </td>
                            <td>
                                {{ $produit->attributes['prix_ttc'] }} fcfa
                            </td>
                            <td>
                                {{ (int)$produit->attributes['prix_ttc'] * $produit->quantity }} fcfa
                            </td>
                            
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>Total HT</td>
                            <td>24.17 €</td>
                        </tr>
                    @endforeach
               
                <tr>
                    <td colspan="2"></td>
                    <td>TVA (20%)</td>
                    <td>4.83 €</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Total TTC</td>
                    <td>{{$total_ttc_panier}} fcfa</td>
                </tr>
                </tfoot>
            </table>
            <a class="btn btn-block btn-outline-dark" href="#">Commander</a>
        </div>
    </section>


</main>


@endsection

