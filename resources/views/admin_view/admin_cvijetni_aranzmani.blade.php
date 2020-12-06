@extends('layouts.adminMaster')
@section('content')

<!-- product category -->
<section id="aa-product-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="aa-product-catg-content">
                    <div class="aa-product-catg-head">
                        {{-- <div class="aa-product-catg-head-left"> --}}
                            {{-- <form action="" class="aa-sort-form">
                                <label for="">Sort by</label>
                                <select name="">
                                    <option value="1" selected="Default">Default</option>
                                    <option value="2">Name</option>
                                    <option value="3">Price</option>
                                    <option value="4">Date</option>
                                </select>
                            </form>
                            <form action="" class="aa-show-form">
                                <label for="">Show</label>
                                <select name="">
                                    <option value="1" selected="12">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select>
                            </form> --}}
                        {{-- </div> --}}
                        <div class="aa-product-catg-head-right">
                            <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                            <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                        </div>
                    </div>
                    <div class="aa-product-catg-body">
                        <ul class="aa-product-catg">
                            <!-- start single product item -->
                            @foreach($cvijetniAranzman as $item)

                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{{$item->slika}}"></a>
                                    <a class="aa-add-card-btn" href="{{url("ponuda/{$item->id}")}}"><span
                                            class="fa fa-shopping-cart"></span>Izmijeni</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="">{{$item->naziv}}</a></h4>
                                        <span class="aa-product-price">{{$item->cijena_KM}}KM</span>
                                        <p class="aa-product-descrip">{{$item->opis}}</p>
                                    </figcaption>
                                </figure>
                            </li>



                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection