@extends('layouts.adminMaster')
@section('content')
<!-- Start slider -->
<section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="https://image.dnevnik.hr/media/images/1920x1080/Jun2020/61903618-orhideje.jpg" alt="Orhideja" />
              </div>
              <div class="seq-title">
               {{-- <span data-seq>Akcija 20%</span>                 --}}
                <h2 data-seq>Kućno cvijeće</h2>                
                <p data-seq>Ukras svakog doma...</p>
                {{-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Naruči </a> --}}
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="https://a-static.besthdwallpaper.com/calla-lily-yellow-white-and-red-wallpaper-2880x1620-53198_52.jpg" alt="Kale" />
              </div>
              <div class="seq-title">
                {{-- <span data-seq>Uštedi do 40%</span>                 --}}
                <h2 data-seq>Kućno cvijeće i cvijetni aranžmani </h2>                
                <p data-seq>Kale su lijepo cvijeće...</p>
                {{-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Naruči </a> --}}
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="https://cvjecarnicavesna.com/wp-content/uploads/2013/03/76f7474ad61fbf539b883fd29f4e080d.png" alt="Aranžman" />
              </div>
              <div class="seq-title">
                {{-- <span data-seq>Save Up to 75% Off</span>                 --}}
                <h2 data-seq>Kreativni cvijetni aranžmani</h2>                
                <p data-seq>Za svaku priliku....</p>
                {{-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Naruči</a> --}}
              </div>
            </li>                 
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
    
@endsection