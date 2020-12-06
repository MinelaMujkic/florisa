@extends('layouts.master')
@section('content')



<section class="order-form">
  <div class="container">
    <form action="{{route('storeNarudzba')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12">
        <h1 class="narudzba">Vaša narudžba bit će na Vašoj kućnoj adresi u roku 24h.</h1>
        <span>Molimo da popunite sva polja</span>
        <hr class="mt-1">
        </div>
        <div class="col-12">
          <div class="row mx-4">
            <div class="col-12 mb-2">
              <label class="order-form-label">Lični podaci</label>
            </div>
            <div class="col-12 col-sm-6">
              <input class="order-form-input" name="ime_narucioca" placeholder="Ime">
            </div>
            <div class="col-12 col-sm-6 mt-2 mt-sm-0">
              <input class="order-form-input" name="prezime_narucioca" placeholder="Prezime">
            </div>
          </div>
          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Proizvod koji ste naručili</label>
            </div>
            @foreach ($ponuda as $item)

            <div class="col-12" hidden>
              <input class="order-form-input" name="id_ponude" value="{{$item->id}}">
            </div>

            <div class="col-12">
              <h4 class="aa-product-title"><a class="nazivProizvoda" href="">{{$item->naziv}}</a></h4>
            </div>
          </div>
          
          <div class="col-12">
            <a class="aa-product-img" href="#"><img class="proizvod" src="{{$item->slika}}"></a>
          </div>
          <div class="row mt-3 mx-4">
          <div class="col-12">
            <input class="order-form-input"  name="ugovorena_cijena_KM" value="{{$item->cijena_KM}}">
          </div>
        </div>
        </div>
          
        </div>
    @endforeach
    <div class="row mt-3 mx-4">
      <div class="col-12">
        <label class="order-form-label">Broj telefona</label>
      </div>
      <div class="col-12">
        <input class="order-form-input" name='broj_telefona' placeholder=" ">
      </div>
    </div>
    <div class="row mt-3 mx-4">
      <div class="col-12">
        <label class="order-form-label">Adresa</label>
      </div>
      <div class="col-12">
        <input class="order-form-input" name="ulica" placeholder="Ulica br.">
      </div>
      {{-- <div class="col-12 mt-2">
          <input class="order-form-input" placeholder="Adresa 2">
        </div> --}}
      <div class="col-12 col-sm-6 mt-2 pr-sm-2">
        <input class="order-form-input" name="grad" placeholder="Grad">
      </div>
      <div class="col-12 col-sm-6 mt-2 pl-sm-0">
        <input class="order-form-input" name="kanton" placeholder="Kanton">
      </div>
      <div class="col-12 col-sm-6 mt-2 pr-sm-2">
        <input class="order-form-input" name="postanski_broj" placeholder="Poštanski broj">
      </div>
      <div class="col-12 col-sm-6 mt-2 pl-sm-0">
        <input class="order-form-input" name="drzava" placeholder="Država">
      </div>
    </div>

    <div class="row mt-3 mx-4">
      <div class="col-12">
        <label class="order-form-label">Komentar/Napomena:</label>
      </div>
      <div class="col-12">
        <input class="order-form-input" name="komentar_napomena" placeholder=" ">
      </div>
    </div>

    <div class="row mt-3 mx-4">
      <div class="col-12">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" name="saglasnost_za_uvjete_koristenja" id="validation" value="1">
          <label for="validation" class="form-check-label"><br>Slažem se sa uslovima korištenja</label>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-12">
        <button type="submit" id="btnSubmit" class="btn btn-dark d-block mx-auto btn-submit">Pošalji</button>
      </div>
    </div>

    </form>
  </div>
  
  {{-- </div>
  </div> --}}


  <style>
    .order-form {
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

    .proizvod {
      padding: 0px 60px;
      width:35%;
    }

    .aa-product-price {
      padding: 0px 30px;

    }

    .narudzba {
      margin-top: 20px;
    }

    
  </style>
</section>

@endsection