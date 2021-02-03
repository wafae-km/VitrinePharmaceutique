@extends("layouts.vitrine")
@section('content')
<div class="container">
  
  <div class="row">
    <div class="col-4 cards-container">
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
        <div class="input-field row">
          <div class="form-group-row offset-md-1">
             <input type="hidden" id="id" name="id" value="{{ $produit->id }}">
              <label for="quantity">Quantité</label>      
              <input id="quantity" name="quantity" type="number" value="1" min="1">  
              <button class="btn waves-effect waves-light" style="width:20% right:0px position:absolute" type="submit" id="addcart"><i class="fas fa-cart-arrow-down"></i>
              </button>
           </div> 
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