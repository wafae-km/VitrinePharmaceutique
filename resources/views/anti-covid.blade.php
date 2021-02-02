@extends("layouts.vitrine")
@section('content')
<div class="container">
  
  <div class="row">
    <div class="col s12 cards-container">
      @foreach($produits as $produit)
        <div class="card">
          <div class="card-image">
            @if($produit->quantite)
              <a href="#">
            @endif
              <!-- <img src="/images/thumbs/{{ $produit->image }}"> -->
              <img src="/images/1.jpg">
            @if($produit->quantite) </a> @endif
          </div>          
          <div class="card-content center-align">
            <p>{{ $produit->nom }}</p>
            @if($produit->quantite)
              <p><strong>{{ number_format($produit->prix, 2, ',', ' ') }} € TTC</strong></p>
            @else
              <p class="red-text"><strong>Produit en rupture de stock</strong></p>
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

		


@endsection