@extends("layouts.vitrine")
@section('content')
<!--Modal panier-->
<div class="modal fade" id="ModalPanier" role="dialog" aria-labelledby="ModalPanierLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalPanierLabel" >Reserve a Table</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>&times;</span>
          </button>
        </div>
        <div class="modeal-body">
            <div class="container-fluid Responsive">
            <form>
                <div class="form-group row">
                    <label class=" col-12 col-md-2 form-check-label" for="numguest">Number of Guests</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="numguest" id="numguest" value="1">
                        <label class="form-check-label" for="numguest">1</label>
                      </div>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="numguest" id="numguest" value="2">
                        <label class="form-check-label" for="numguest">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="numguest" id="numguest" value="3">
                        <label class="form-check-label" for="numguest">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="numguest" id="numguest" value="4">
                        <label class="form-check-label" for="numguest">4</label>
                    </div> 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="numguest" id="numguest" value="5">
                        <label class="form-check-label" for="numguest">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="numguest" id="numguest" value="6">
                        <label class="form-check-label" for="numguest">6</label>
                      </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-md-2 col-form-label">Section</label>
                    <div class="col-6 col-md-4">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-success active">
                              <input type="radio" name="options" id="option1" autocomplete="on" checked> Non-Smoking
                            </label>
                            <label class="btn btn-danger">
                              <input type="radio" name="options" id="option2" autocomplete="off"> Smoking
                            </label>
                          </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-md-2 col-form-label">Date and Time</label>
                    <div class="col-6 col-md-4">
                        <input class="form-control" id="date" name="date" placeholder="Date">
                    </div>
                    <div class="col-6 col-md-4">
                        <input class="form-control" id="time" name="time" placeholder="Time">
                    </div>
                </div>
             
            </form>
        </div>
        </div>
        <div class="modal-footer col-12 col-md-4 offset-md-1">
          <button id="closebuttonreserve"type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary ">Reserve</button>
        </div>
      </div>
    </div>
  </div>
<!--End Modal panier-->
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
              <img src="/images/1.jpg">
            @if($produit->quantite) </a> @endif
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