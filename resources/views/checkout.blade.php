@extends('layouts.main')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Narudžba</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Narudžba</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Checkout -->
<section class="my-2 py-3 checkout">
        <div class="container text-center mt-1 pt-5">
            <h2>Napravi narudžbu</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form id="checkout-form" method = "POST"  action = "{{route('place_order')}}" >
               
                
                <div class="form-group checkout-small-element">
                    <label for="">Ime</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="ime" required>
                </div>
                @csrf

                <div class="form-group checkout-small-element">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="checkout-email" name="email" placeholder="email adresa" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Telefon</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="broj telefona" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Grad</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="grad" required>
                </div>

                <div class="form-group checkout-large-element">
                    <label for="">Adresa</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="adresa" required>
                </div>


                @if(Session::has('total'))
                 @if(Session::get('total') != null)

                <div class="form-group checkout-btn-container">
                    <p>Ukupno za platiti: {{Session::get('total')}}KM</p>
                    <input type="submit" class="btn" id="checkout-btn" name="checkout_btn" value="Naručiti">
                </div>
                @endif
                @endif
            </form>
        </div>
    </section>



@endsection