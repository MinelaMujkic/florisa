@extends('layouts.master')
@section('content')
    
<!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Blog Details</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>         
           
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 
   <!-- Blog Archive -->
   <section id="aa-blog-archive">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="aa-blog-archive-area">
             <div class="row">
               <div class="col-md-12">
                 <!-- Blog details -->
                 <div class="aa-blog-content aa-blog-details">
                   <article class="aa-blog-content-single">                        
                     <h2><a href="#">Savjeti za uzgoj orhideje</a></h2>
                      <div class="aa-article-bottom">
                       <div class="aa-post-author">
                         Objavila <a href="#">Adela M.</a>
                       </div>
                       <div class="aa-post-date">
                         05.12.2020.
                       </div>
                     </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="slika">
                          <img src="https://miss7.24sata.hr/media/img/92/d0/bc08f0ead6d27b45a182.jpeg" style="height: 40%; width:60%;">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p></p>
                        <p class="blogKlasa">Ako je dobro zasađena, njega orhideja je izrazito jednostavna. Ljeti je treba zalijevati više, a zimi manje, a dobro je i povremeno pošpricati je vodom iz raspršivača. 
                          Kvaliteta vode je od izuzetne važnosti, pa izbjegavaj vodu iz slavine. 
                          Radije je pusti da malo odstoji ili, ako si u mogućnosti, koristite kišnicu. 
                          Povremeno možeš svoju orhideju potopiti u većoj zdjeli vode, ali je tada izuzetno važno dobro je prosušiti. 
                          Tijekom sezone rasta možeš je nahraniti blagom otopinom gnojiva. Zimi drži svoju orhideju na toplom, 
                          a zalijevanje smanji što više, jer je biljka u fazi mirovanja. Nemoj je gnojiti i ostavite je na miru.</p>
                        <blockquote class="blogKlasa">
                          Zimi drži svoju orhideju na toplom, 
                          a zalijevanje smanji što više, jer je biljka u fazi mirovanja.
                        </blockquote>
                      </div>
                    </div>
                     
                     <div class="blog-single-bottom">
                       <div class="row">
                         <div class="col-md-8 col-sm-6 col-xs-12">
                           <div class="blog-single-tag">
                             <span>Tags:</span>
                             <a href="#">Cvijeće,</a>
                             <a href="#">Ukras doma,</a>
                             <a href="#">Ljubav</a>
                           </div>
                         </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-single-social">
                             <a href="#"><i class="fa fa-facebook"></i></a>
                             <a href="#"><i class="fa fa-twitter"></i></a>
                             <a href="#"><i class="fa fa-linkedin"></i></a>
                             <a href="#"><i class="fa fa-google-plus"></i></a>
                             <a href="#"><i class="fa fa-pinterest"></i></a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </article>
                   <!-- blog navigation -->
                   <div class="aa-blog-navigation">
                     <a class="aa-blog-prev" href="#"><span class="fa fa-arrow-left"></span>Prethodna</a>
                     <a class="aa-blog-next" href="#">Sljedeća<span class="fa fa-arrow-right"></span></a>
                   </div>

                   <!-- Latest Blog -->
                    <section id="aa-latest-blog">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="aa-latest-blog-area">
                              <h2>ZADNJE OBJAVE NA BLOGU</h2>
                              <div class="row">
                                <!-- single latest blog -->
                                <div class="col-md-4 col-sm-4">
                                  <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">                    
                                      <a href="#"><img src="https://tropic.ba/wp-content/uploads/2020/04/baner-sajt-orhideja.jpg" style="width:100%" alt="img"></a>  
                                        <figcaption class="aa-blog-img-caption">
                                        {{-- <span href="#"><i class="fa fa-eye"></i>5K</span>
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                        <a href="#"><i class="fa fa-comment-o"></i>20</a> --}}
                                        <span href="#"><i class="fa fa-clock-o"></i>05.12.2020.</span>
                                      </figcaption>                          
                                    </figure>
                                    <div class="aa-blog-info">
                                      <h3 class="aa-blog-title"><a href="#">Savjeti za uzgoj orhideje</a></h3>
                                      <p class="blogKlasa">Ako je dobro zasađena, njega orhideja je izrazito jednostavna. Ljeti je treba zalijevati više, a zimi manje, a dobro je i povremeno pošpricati je vodom iz raspršivača. Kvaliteta vode je od izuzetne važnosti, pa izbjegavaj vodu iz slavine. Radije je pusti da malo odstoji ili, ako si u mogućnosti, koristite kišnicu. </p> 
                                      <a href="{{route('blog')}}" class="aa-read-mor-btn">Više... <span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                  </div>
                                </div>
                                <!-- single latest blog -->
                                <div class="col-md-4 col-sm-4">
                                  <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">                    
                                      <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjlTAoMgP7BzfO6FW3_VJP1l1KeW34vPmwRA&usqp=CAU"></a>  
                                        <figcaption class="aa-blog-img-caption">
                                        {{-- <span href="#"><i class="fa fa-eye"></i>5K</span>
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                        <a href="#"><i class="fa fa-comment-o"></i>20</a> --}}
                                        <span href="#"><i class="fa fa-clock-o"></i>20.11.2020.</span>
                                      </figcaption>                          
                                    </figure>
                                    <div class="aa-blog-info">
                                      <h3 class="aa-blog-title"><a href="#">Znate li da kale možete uzgajati i u plasteniku?</a></h3>
                                      <p class="blogKlasa">Sezona cvjetanja kala je gotovo devet mjeseci. Ako se pazi na pravilan uzgoj, ove otporne biljke godinama daju cvijet. Kala se razmnožava u fazi mirovanja, tako da se mesnati gomolj posadi na dubinu od pet centimetara.</p> 
                                      <a href="#" class="aa-read-mor-btn">Više... <span class="fa fa-long-arrow-right"></span></a>         
                                    </div>
                                  </div>
                                </div>
                                <!-- single latest blog -->
                                <div class="col-md-4 col-sm-4">
                                  <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">                    
                                      <a href="#"><img src="https://www.journal.hr/wp-content/uploads/2017/06/cvjetna-galeirja-rl-2.jpg"></a>  
                                        <figcaption class="aa-blog-img-caption">
                                        {{-- <span href="#"><i class="fa fa-eye"></i>5K</span>
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                        <a href="#"><i class="fa fa-comment-o"></i>20</a> --}}
                                        <span href="#"><i class="fa fa-clock-o"></i>04.10.2020.</span>
                                      </figcaption>                          
                                    </figure>
                                    <div class="aa-blog-info">
                                      <h3 class="aa-blog-title"><a href="#">Kako da očuvate vaš buket duže vrijeme</a></h3>
                                      <p class="blogKlasa">Budite oprezni s buketima cvijeća – odrežite vrpcu, a zatim nježno uklonite celofan ili papir – buket cvijeća ima još jednu vrpcu koja drži cvijeće zajedno – podrežite stabljike prije rezanja vrpce i zatim cvijeće odmah stavite u vazu, poravnajte cvjetove ako je to potrebno.</p> 
                                      <a href="#" class="aa-read-mor-btn">Više... <span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>    
                        </div>
                      </div>
                    </section>
                    <!-- / Latest Blog -->
                   <!-- Blog Comment threats -->
                   <div class="aa-blog-comment-threat">
                     <h3>Komentari (4)</h3>
                     <div class="comments">
                       <ul class="commentlist">
                         
                         <li>
                           <div class="media">
                             <div class="media-left">    
                                 <img class="media-object news-img" src="data:image/png;base64,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" alt="img">      
                             </div>
                             <div class="media-body">
                              <h4 class="author-name">Osman Osmić</h4>
                              <span class="comments-date"> 05.12.2020.</span>
                              <p>Puno hvala! Naručit ću od vas za svoju suprugu, sljedeće sedmice joj je rođendan.</p>
                              <a href="#" class="reply-btn">Odgovori</a>
                             </div>
                           </div>
                         </li>
                         <ul class="children">
                           <li class="author-comments">
                             <div class="media">
                               <div class="media-left">    
                                   <img class="media-object news-img" src="data:image/png;base64,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" alt="img">      
                               </div>
                               <div class="media-body">
                                <h4 class="author-name">Admin</h4>
                                <span class="comments-date"> 05.12.2020.</span>
                                <span class="author-tag">Author</span>
                                <p>Radujemo se, lijep pozdrav :)</p>
                                <a href="#" class="reply-btn">Odgovori</a>
                               </div>
                             </div>
                           </li>
                           
                         </ul>
                         <li>
                           
                       </ul>
                     </div>
                     <div class="aa-blog-archive-pagination">
                       <nav>
                         <ul class="pagination">
                           <li>
                             <a href="#" aria-label="Previous">
                               <span aria-hidden="true">«</span>
                             </a>
                           </li>
                           <li><a href="#">1</a></li>
                           <li><a href="#">2</a></li>
                           <li>
                             <a href="#" aria-label="Next">
                               <span aria-hidden="true">»</span>
                             </a>
                           </li>
                         </ul>
                       </nav>
                     </div>
                   </div>
                   <!-- blog comments form -->
                   <div id="respond">
                     <h3 class="reply-title">Ostavi komentar</h3>
                     <form id="commentform">
                       <p class="comment-notes">
                         Vaša email adresa neće biti javna. Obavezna polja su markiana * <span class="required">*</span>
                       </p>
                       <p class="comment-form-author">
                         <label for="author">Ime <span class="required">*</span></label>
                         <input type="text" name="author" value="" size="30" required="required">
                       </p>
                       <p class="comment-form-email">
                         <label for="email">Email <span class="required">*</span></label>
                         <input type="email" name="email" value="" aria-required="true" required="required">
                       </p>
                       <p class="comment-form-url">
                         <label for="url">Website</label>
                         <input type="url" name="url" value="">
                       </p>
                       <p class="comment-form-comment">
                         <label for="comment">Komentar</label>
                         <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                       </p>
                       <p class="form-allowed-tags">
                         You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>
                       </p>
                       <p class="form-submit">
                         <input type="submit" name="submit" class="aa-browse-btn" value="Komentiraj">
                       </p>        
                     </form>
                   </div>
                 </div>
               </div>
 
               
             </div>           
           </div>
         </div>
       </div>
     </div>

     <style>

       .blogKlasa{
         font-size: 18px;
         color:#524E4F;
         font-family: "Raleway", sans-serif;
       }
       </style>
   </section>
   <!-- / Blog Archive -->
 
 
   

@endsection
