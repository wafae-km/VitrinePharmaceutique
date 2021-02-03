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
          <div class="col s12 m6">
      <h4>{{ $produit->name }}</h4>
      <p><strong>{{ number_format($produit->price, 2, ',', ' ') }} € TTC</strong></p>
      <p>{{ $produit->description }}</p>
      <form  method="POST" action="#">
        @csrf
        <div class="input-field col">
          <input type="hidden" id="id" name="id" value="{{ $produit->id }}">
          <input id="quantity" name="quantity" type="number" value="1" min="1">
          <label for="quantity">Quantité</label>        
          <p>
            <button class="btn waves-effect waves-light" style="width:40%" type="submit" id="addcart"><i class="fas fa-cart-arrow-down"></i> Ajouter au panier
            </button>
          </p>    
        </div>    
      </form>
    </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

		


@endsection