@extends('layouts.adminMaster')
@section('content')

<div class="container">

    <h2>Unesi novu ponudu</h2>

    <form action="{{route('store')}}" method="POST">
     
      @csrf

      <p>Kategorija cvijeca</p>
      <div class="form-group">
        <label class="form-check-label form-check-inline">
          <input type="checkbox" name="kategorija_cvijeca" class="form-check-input" value="1">Cvijetni aranzman
        </label>
      </div>
      <div class="form-group ">
        <label class="form-check-label form-check-inline">
          <input type="checkbox" name="kategorija_cvijeca" class="form-check-input" value="0">Kucno cvijece
        </label>
      </div>


      <div class="form-group">
        <label>Naziv</label>
        <input type="text" name="naziv" class="form-control">
    </div>
    <div class="form-group">
        <label>Opis</label>
        <textarea  name="opis" class="form-control"></textarea>
    </div>
    <div class="file-field">
        <div class="btn btn-primary btn-sm float-left">
            <span>Odaberite sliku</span>
            <input type="file" name="slika">
        </div>
    </div>
<br>
<br>
    <div class="form-group">
        <label>Cijena u KM</label>
        {{-- <input type="number" name="cijena_KM" class="form-control"> --}}
        <input type="text" name="cijena" class="form-control">
    </div>

    <p>Status</p>
      <div class="form-group">
        <label class="form-check-label form-check-inline">
          <input type="checkbox" name="status" class="form-check-input" value="1">Aktivna ponuda
        </label>
      </div>
      <div class="form-group ">
        <label class="form-check-label form-check-inline">
          <input type="checkbox" name="status" class="form-check-input" value="0">Neaktivna ponuda
        </label>
      </div>


      
     <div>
      <button type="submit" class="btn btn-primary">Potvrdi</button>
     </div>
    </form>

</form>
<br>
<br>

</div>
    
@endsection