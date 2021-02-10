@extends("layouts.vitrine")
@section('content')
@if(session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
                {{ session()->forget('message') }}
                @elseif(session()->has('error'))
                <div class="alert alert-error">{{ session()->get('error') }}</div>
                {{ session()->forget('error') }}
                @endif

<div class="container">
  
  <div class="col">
    <div class="row cards-container">
      @foreach($produits as $produit)
        <div class="card">
          <div class="card-image">
            @if($produit->quantite)
              <a href="#">
            @endif
              <!-- <img src="/images/thumbs/{{ $produit->image }}"> -->
              <img style="width:300px;height:150px" src="{{ asset('/storage/product/'. $produit->file_path ) }}" alt="First slide">
</td>            @if($produit->quantite) </a> @endif
          </div>          
          <div class="card-content center-align">
             <div class="col s12 m6">
                <h2>{{ $produit->title }}</h2>
                <p class="text-success"><strong>{{ number_format($produit->price, 2, ',', ' ') }} € TTC</strong></p>
                <p>{{ $produit->description }}</p>
               <form  method="POST" action="{{ url('basket/add/'.$produit->id) }}">
                @csrf
               <div class="input-field row">
                 <div class="form-group-row offset-md-1">
                   <input type="hidden" id="id" name="id" value="{{ $produit->id }}">
                   <label for="quantity">Quantité</label>      
                   <input id="quantity" name="quantity" type="number" value="1" min="1">  
                   <button class="btn waves-effect waves-light"  style="width:20% right:0px position:absolute" type="submit" ><i class="fas fa-cart-arrow-down"></i>
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

 <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
 <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
 <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
 <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
@endsection