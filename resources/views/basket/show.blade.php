@extends("layouts.vitrine")
@section("content")
<div class="container">

	@if (session()->has('message'))
	<div class="alert alert-info">{{ session('message') }}</div>
	@endif

	@if (session()->has("basket"))
	<h1>Mon panier</h1>
	<div class="table-responsive shadow mb-3">
		<table class="table table-bordered table-hover bg-white mb-0">
			<thead class="thead-dark" >
				<tr>
					<th>#</th>
					<th>Produit</th>
					<th>Prix</th>
					<th>Quantité</th>
					<th>Total</th>
					<th>Opérations</th>
				</tr>
			</thead>
			<tbody>
				<!-- Initialisation du total général à 0 -->
				@php $total = 0 @endphp

				<!-- On parcourt les produits du panier en session : session('basket') -->
				@foreach (session("basket") as $key => $item)

					<!-- On incrémente le total général par le total de chaque produit du panier -->
					@php $total += $item['price'] * $item['quantity'] @endphp
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>
							<strong><a href="{{ url('/products', $key) }}" title="Afficher le produit" >{{ $item['title'] }}</a></strong>
						</td>
						<td>{{ $item['price'] }} $</td>
						<td>
							<!-- Le formulaire de mise à jour de la quantité -->
							<form method="POST" action="{{ route('basket.add', $key) }}" class="form-inline d-inline-block" >
							{{ csrf_field() }}
								<input type="number" name="quantity" placeholder="Quantité ?" value="{{ $item['quantity'] }}" class="form-control mr-2" style="width: 80px" >
								<input type="submit" class="btn btn-primary" value="Actualiser" />
							</form>
						</td>
						<td>
							<!-- Le total du produit = prix * quantité -->
							{{ $item['price'] * $item['quantity'] }} $
						</td>
						<td>
							<!-- Le Lien pour retirer un produit du panier -->
							<a href="{{ route('basket.remove', $key) }}" class="btn btn-outline-danger" title="Retirer le produit du panier" >Retirer</a>
						</td>
					</tr>
				@endforeach
				<tr colspan="2" >
					<td colspan="4" >Total général</td>
					<td colspan="2">
						<!-- On affiche total général -->
						<strong>{{ $total }} $</strong>
					</td>
				</tr>
			</tbody>

		</table>
	</div>

	<!-- Lien pour vider le panier -->
	<a class="btn btn-danger" href="{{ route('basket.empty') }}" title="Retirer tous les produits du panier" >Vider le panier</a>

	@else
	<div class="alert alert-info">Aucun produit au panier</div>
	@endif

</div>
@endsection