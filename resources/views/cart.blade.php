@extends('layouts.main')

@section('content')

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

        
             

    <section class="cart container mt-2 my-3 py-5">
        <div class="container mt-2">
            <h4>Vaša korpa</h4>
        </div>

        <table class="pt-5">
            <tr>
                <th>Produkt</th>
                <th>Količina</th>
                <th>Ukupno</th>
            </tr>



                @if(Session::has('cart'))
                @foreach(Session::get('cart') as $product)


         
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="{{asset('img/'.$product['image']) }}">
                                <div>
                                    <p>{{$product['name']}}</p>
                                    <small><span></span>{{$product['price']}}KM</small>
                                    <br>
                                    <form method="POST" action="{{ route('remove_from_cart')}}">
                                        @csrf 
                                        <input type="hidden" name ="id" value="{{ $product['id']}}">
                                        <input type="submit" name="remove_btn" class="remove-btn" value="remove">
                                    </form>
                                </div>
                            </div>
                        </td>

                        <td>
                            <form method="POST" action="{{route('edit_product_quantity')}}">
                            @csrf 
                            <input type="submit" value="-" class="edit-btn" name="decrease_product_quantity_btn">

                                <input type="hidden" name = "id" value="{{$product['id']}}" >
                                <input type="text" name="quantity" value="{{$product['quantity']}}" readonly>

                                <input type="submit" value="+" class="edit-btn" name="increase_product_quantity_btn">

                            </form>
                        </td>

                        <td>
                            <span class="product-price">{{$product['price'] * $product['quantity']}}</span>
                        </td>
                    </tr>

                @endforeach

                @endif
           

        </table>


        <div class="cart-total">
            <table>
      @if (Session::has('cart'))
                <tr>
                    <td>Ukupno</td>
                   
                      @if (Session::has('total'))
                       <td>{{Session::get('total')}}KM</td>

                      @endif
                   
                </tr>
       @endif  
            </table>
        </div>
        

        <div class="checkout-container">

         @if(Session::has('total'))
         @if(Session::get('total') != null)
            <form method = "GET" action="{{ route('checkout') }}">
                <input type="submit" class="btn checkout-btn" value="Checkout" name="">
            </form>
          @endif
          @endif
        
        </div>





    </section>

              
    <!-- Cart End -->


@endsection