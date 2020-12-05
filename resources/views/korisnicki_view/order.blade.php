@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<section class="order-form my-4 mx-4">
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h1>Vaša narudžba bit će na Vašoj kućnoj adresi u roku 24h.</h1>
        <span>Molimo da popunite sva polja</span>
        <hr class="mt-1">
      </div>
      <div class="col-12">

        <div class="row mx-4">
          <div class="col-12 mb-2">
            <label class="order-form-label">Lični podaci</label>
          </div>
          <div class="col-12 col-sm-6">
            <input class="order-form-input" placeholder="Ime">
          </div>
          <div class="col-12 col-sm-6 mt-2 mt-sm-0">
            <input class="order-form-input" placeholder="Prezime">
          </div>
        </div>

        <div class="row mt-3 mx-4">
          <div class="col-12">
            <label class="order-form-label">Proizvod koji ste naručili</label>
          </div>
          @foreach ($ponuda as $item)


          <div class="col-12">
            <h4 class="aa-product-title"><a href="">{{$item->naziv}}</a></h4>
          </div>
        </div>
        <div class="col-12">
          <a class="aa-product-img" href="#"><img src="{{$item->slika}}"></a>
        </div>
      </div>
      <div class="col-12">
        <span class="aa-product-price">{{$item->cijena_KM}}KM</span>
      </div>
    </div>
    @endforeach
    <div class="row mt-3 mx-4">
      <div class="col-12">
        <label class="order-form-label">Broj telefona</label>
      </div>
      <div class="col-12">
        <input class="order-form-input" placeholder=" ">
      </div>
    </div>



    <div class="row mt-3 mx-4">
      <div class="col-12">
        <label class="order-form-label">Adresa</label>
      </div>
      <div class="col-12">
        <input class="order-form-input" placeholder="Kućna adresa">
      </div>
      <div class="col-12 mt-2">
        <input class="order-form-input" placeholder="Adresa 2">
      </div>
      <div class="col-12 col-sm-6 mt-2 pr-sm-2">
        <input class="order-form-input" placeholder="Grad">
      </div>
      <div class="col-12 col-sm-6 mt-2 pl-sm-0">
        <input class="order-form-input" placeholder="Kanton">
      </div>
      <div class="col-12 col-sm-6 mt-2 pr-sm-2">
        <input class="order-form-input" placeholder="Poštanski broj">
      </div>
      <div class="col-12 col-sm-6 mt-2 pl-sm-0">
        <input class="order-form-input" placeholder="Država">
      </div>
    </div>

    <div class="row mt-3 mx-4">
      <div class="col-12">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" name="validation" id="validation" value="1">
          <label for="validation" class="form-check-label"><br>Slažem se sa uslovima korištenja</label>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-12">
        <button type="button" id="btnSubmit" class="btn btn-dark d-block mx-auto btn-submit">Pošalji</button>
      </div>
    </div>

  </div>
  </div>
  </div>

  <style>
    .order-form .container {
      color: #4c4c4c;
      padding: 20px;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
    }

    .order-form-label {
      margin: 8px 0 0 0;
      font-size: 14px;
      font-weight: bold;
    }

    .order-form-input {
      width: 100%;
      padding: 8px 8px;
      border-width: 1px !important;
      border-style: solid !important;
      border-radius: 3px !important;
      font-family: 'Open Sans', sans-serif;
      font-size: 14px;
      font-weight: normal;
      font-style: normal;
      line-height: 1.2em;
      background-color: transparent;
      border-color: #cccccc;
    }

    .btn-submit:hover {
      background-color: #090909 !important;
    }
  </style>
</section>
@endsection