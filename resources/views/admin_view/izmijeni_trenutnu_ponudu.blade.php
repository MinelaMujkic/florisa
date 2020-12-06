@extends('layouts.adminMaster')
@section('content')

<div class="container">

    <h2>Izmijeni trenutnu ponudu</h2>

    <form action="#" method="POST" enctype="multipart/form-data" >
     
      @csrf

      {{-- <p>Kategorija cvijeca</p>
      <div class="form-group">
        <label class="form-check-label form-check-inline">
          <input type="checkbox" name="kategorija_cvijeca" class="form-check-input" value="1"> Cvijetni aranzman
        </label>
      </div>
      <div class="form-group ">
        <label class="form-check-label form-check-inline">
          <input type="checkbox" name="kategorija_cvijeca" class="form-check-input" value="0"> Kucno cvijece
        </label>
      </div> --}}

    @foreach ($ponuda as $item)
        
   


      <div class="form-group">
        <label>Naziv</label>
        <label>{{$item->naziv}} </label>
    </div>
    <div class="form-group">
        <label>Opis</label>
        <textarea  name="opis" class="form-control" placeholder="{{$item->opis}} "></textarea>
    </div>
    <div class="form-group">
      
            <a class="aa-product-img" href="#"><img class="proizvod" src="{{$item->slika}}"></a>
        
    </div>
<br>
<br>
    <div class="form-group">
        <label>Cijena u KM</label>
        {{-- <input type="number" name="cijena_KM" class="form-control"> --}}
        <input type="number" placeholder="{{$item->cijena_KM}}" step="0.01" min="0"  name="cijena_KM" class="form-control">
    </div>

    <p>Status</p>
      <div class="form-group">
        <label class="form-check-label form-check-inline">
          <input type="checkbox" name="status" class="form-check-input" value="1"> Aktivna ponuda
        </label>
      </div>
      <div class="form-group ">
        <label class="form-check-label form-check-inline">
          <input type="checkbox" name="status" class="form-check-input" value="0"> Neaktivna ponuda
        </label>
      </div>

      @endforeach
      
     <div>
      <button type="submit" class="btn btn-primary">Potvrdi</button>
     </div>
    </form>

</form>
<br>
<br>

</div>
    
@endsection