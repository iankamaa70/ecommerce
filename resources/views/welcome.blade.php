@include('head')
   <body class="home page-template page-template-templates page-template-page-home page-template-templatespage-home-php page page-id-711">
      <div class="wrapper js-wrapper">
         @include('menu')
         <div class="main js-main">
            <section class="hero-video" data-module="hero-video" role="banner" aria-label="Hero">
               <div class="hero-video__wrapper js-hero-wrapper">
                  <
                  <div class="hero-video__iframe js-iframe">
                     <iframe id="iframe-hero" aria-hidden="true" data-autoplay data-keepplaying width="640" height="360" src="https://www.youtube.com/embed/2R2uNfSqCe4?vq=hd1080&amp;feature=oembed&amp;enablejsapi=1&amp;autoplay=1&amp;loop=1&amp;controls=0&amp;rel=0&amp;wmode=transparent&amp;showinfo=0&amp;mute=1&amp;autohide=0&amp;modestbranding=1&amp;playlist=2R2uNfSqCe4" title="Video" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>         
                  </div>
               </div>
               <div class="hero-video__content js-hero-content">
                  <div class="hero-video__container">
                     <div class="hero-video__inner">
                        <h1 class="hero-video-title hero-video__headline">Welcome Home</h1>
                        <p class="hero-video-description hero-video__description">“Love, Live and Lead like Jesus Christ.” </p>
                     </div>
                     <button class="hero-video__control icon-pause js-hero-control" aria-label="Play/Pause Video"></button>
                     <span class="hero-video__trigger icon-angle-down js-hero-trigger"></span>
                  </div>
               </div>
            </section>
            <main id="main_content" itemprop="mainContentOfPage" tabindex="-1">
               <section class="news-card news-card--home" role="region" aria-label="News">
                  <div class="news-card__wrapper">
                     <div class="container news-card__container">
                        <div class="news-card__block">
                           <div class="grid news-card__grid carousel js-news-card card-fourth--news-card carousel--visible carousel--adaptive-height" data-module="carousel" data-carousel='{"contain": true, "cellAlign": "left", "pageDots": true, "prevNextButtons": true, "groupCells": true, "adaptiveHeight": true}'>

                              <?php $count=1;?>
                              @foreach($events as $event) 
                              <article class="card-fourth 
                                 <?php  
                                 if($count % 2 == 0){ 
        echo " card-fourth--blue-bg-overlay ";  
    } 
    else{ 
        echo " card-fourth--full-color-photo "; 
    } 
                                  ?>
                               grid__item card-fourth__item">
                                 <div class="card-fourth__inner">
                                    <figure class="js-wrap image  image--cover card-fourth__background card-fourth__background-image" data-module="image">
                                       <img class="image__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-normal="{{ asset($event->image) }}" data-retina="{{ asset($event->image) }}" alt="">
                                    </figure>
                                    <div class="card-fourth__background card-fourth__background-color"></div>
                                    <div class="card-fourth__content">
                                       <div class="card-fourth__cat">
                                          <h3 class="label-text"><a href="news/category/cornell-university/index.html" class="button button--black card-fourth__label">{{$event->time}}</a></h3>
                                          <h3 class="label-text"><a href="news/category/campus/index.html" class="button button--black card-fourth__label">{{$event->event_date}}</a></h3>
                                       </div>
                                       <div class="card-fourth__content-inner">
                                          <h3 class="card-fourth-title secondary-title card-fourth__title"><a href="news/greg-morrisett-named-dean-of-cornell-tech/index.html">{{$event->name}}</a></h3>
                                          <div class="card-fourth__footer">
                                             <a class="button-link button-link-white card-fourth__button" href="news/greg-morrisett-named-dean-of-cornell-tech/index.html"><span>Read the story</span><span class="icon-arrow"></span></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </article>
                              <?php  $count+=1; ?>
                              @endforeach
                              
                  
                           </div>
                           <div class="home-tag-row-label news-card__bottom-text">
                              <p>All <a href="{{ route('event') }}">Events</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="theme-block" role="region" aria-label="Exploration on a theme">
                  <div class="theme-block__container">
                     <h2 class="home-tag-row-label theme-block__headline">Latest News</h2>
                     <div class="theme-block__wrapper">
                        <div class="tab-horizontal" data-module="tabs">
                           <div class="tab-horizontal__wrapper">
                              <div class="tab-horizontal__header-mobile js-modal-toggle">
                                 <div class="tab-horizontal__header-mobile-label">
                                    <p class="home-tab-title tab-horizontal__header-title js-mobile-toggle" data-color="#fe502d" data-target="#tab-horizontal-0" aria-selected="false" aria-controls="tab-horizontal-0">
                                       Latest News                  
                                    </p>
                                 </div>
                                 <span class="icon-triagle-down tab-horizontal__header-mobile-button"></span>
                              </div>
                              <div class="tab-horizontal__header js-header">
                                 <div class="tab-horizontal__control-button js-close">
                                    <span class="icon-close tab-horizontal__close-icon"></span>
                                 </div>
                                 <ul class="tab-horizontal__header-list">
                                    <li class="tab-horizontal__header-item js-toggle" data-color="#fe502d" data-target="#tab-horizontal-0">
                                       <div class="home-tab-title tab-horizontal__header-link">
                                          <a href="#tab-horizontal-0" class="home-tab-title tab-horizontal__header-title" role="tab" aria-selected="true" aria-controls="tab-horizontal-0">
                                          Latest News                               <span class="tab-horizontal__header-line"></span>
                                          </a>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-horizontal__content js-content-list">
                                 <div class="home-tab-horizontal-description tab-horizontal__content-item js-content" id="tab-horizontal-0">
                                                    
                                 </div>
                              </div>
                              <div class="tab-horizontal__list js-list">
                                 <span class="tab-horizontal__border js-border"></span>
                                 <div class="theme-grid js-theme" data-theme="0">
                                    <div class="theme-grid__wrapper">
                                       

                                       @foreach($reports as $report) 
                                       <div class="theme-grid__block theme-grid__block-news">
                                          <div class="theme-grid__item">
                                             <div class="theme-grid__item-inner">
                                                <p class="tag-row">
                                                   <a class="home-tag-row-label link-hover" href="news/index.html">News</a>
                                                </p>
                                                <div class="card-ninth">
                                                   <div class="card-ninth__inner">
                                                      <figure class="js-wrap image  image--cover card-ninth__image-figure" data-module="image">
                                                         <img class="image__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-normal="{{ asset($report->image) }}" data-retina="{{ asset($report->image) }}">
                                                      </figure>
                                                      <div class="card-ninth__content">
                                                         <a
                                                            class="button-link-white link-hover card-ninth__link"
                                                            href="news/how-cornell-tech-aims-to-foster-the-right-kind-of-entrepreneurship/index.html"
                                                            >
                                                         <span class="text">{{$report->name}}</span>
                                                         <span class="icon-arrow"></span>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       @endforeach




                                    </div>
                                 </div>
                                







                                 
                                 
                              </div>
                           </div>
                        </div>
                        <style>
                           [data-target="#tab-horizontal-0"].tab-horizontal__header-activate.tab-horizontal__header-title,
                           [data-target="#tab-horizontal-0"].tab-horizontal__header-title:hover,
                           [data-target="#tab-horizontal-0"] .tab-horizontal__header-title:hover {
                           color: #fe502d       }
                           .tab-horizontal__header-mobile [data-target="#tab-horizontal-0"].is-toggle-active.tab-horizontal__header-title {
                           color: #fe502d       }
                           @media screen and (min-width: 740px) {
                           [data-target="#tab-horizontal-0"] .tab-horizontal__header-line {
                           background-color: #fe502d            }
                           [data-target="#tab-horizontal-0"].is-toggle-active .tab-horizontal__header-title {
                           color: #fe502d           }
                           }
                           [data-target="#tab-horizontal-1"].tab-horizontal__header-activate.tab-horizontal__header-title,
                           [data-target="#tab-horizontal-1"].tab-horizontal__header-title:hover,
                           [data-target="#tab-horizontal-1"] .tab-horizontal__header-title:hover {
                           color: #ffc72c       }
                           .tab-horizontal__header-mobile [data-target="#tab-horizontal-1"].is-toggle-active.tab-horizontal__header-title {
                           color: #ffc72c       }
                           @media screen and (min-width: 740px) {
                           [data-target="#tab-horizontal-1"] .tab-horizontal__header-line {
                           background-color: #ffc72c            }
                           [data-target="#tab-horizontal-1"].is-toggle-active .tab-horizontal__header-title {
                           color: #ffc72c           }
                           }
                           [data-target="#tab-horizontal-2"].tab-horizontal__header-activate.tab-horizontal__header-title,
                           [data-target="#tab-horizontal-2"].tab-horizontal__header-title:hover,
                           [data-target="#tab-horizontal-2"] .tab-horizontal__header-title:hover {
                           color: #d4eb8e       }
                           .tab-horizontal__header-mobile [data-target="#tab-horizontal-2"].is-toggle-active.tab-horizontal__header-title {
                           color: #d4eb8e       }
                           @media screen and (min-width: 740px) {
                           [data-target="#tab-horizontal-2"] .tab-horizontal__header-line {
                           background-color: #d4eb8e            }
                           [data-target="#tab-horizontal-2"].is-toggle-active .tab-horizontal__header-title {
                           color: #d4eb8e           }
                           }
                           [data-target="#tab-horizontal-3"].tab-horizontal__header-activate.tab-horizontal__header-title,
                           [data-target="#tab-horizontal-3"].tab-horizontal__header-title:hover,
                           [data-target="#tab-horizontal-3"] .tab-horizontal__header-title:hover {
                           color: #0095f5       }
                           .tab-horizontal__header-mobile [data-target="#tab-horizontal-3"].is-toggle-active.tab-horizontal__header-title {
                           color: #0095f5       }
                           @media screen and (min-width: 740px) {
                           [data-target="#tab-horizontal-3"] .tab-horizontal__header-line {
                           background-color: #0095f5            }
                           [data-target="#tab-horizontal-3"].is-toggle-active .tab-horizontal__header-title {
                           color: #0095f5           }
                           }
                        </style>
                     </div>
                  </div>
               </section>
               <section class="alumni-spotlight" role="region" aria-label="ALUMNI SPOTLIGHT  ">
                  <div class="container">
                     <div class="alumni-spotlight__inner">
                        <div class="alumni-spotlight__body">
                           <blockquote class="alumni-spotlight__quote">
                              <div class="alumni-spotlight__quote-header">
                                
                              </div>
                              <div class="home-alumni-quote-content">
                                 JOIN US FOR WORSHIP! <br>
                                 Worship With Us    <br>
                                 <span style="font-weight: 400;font-size:25px">Sunday Worship 9:30 AM </span><br>   
                                 <span style="font-weight: 400;font-size:25px">Sunday Service 11:00 AM  </span><br>
                                 <span style="font-weight: 400;font-size:14px">
                                 The Potter’s House of North Dallas | 10501 Main Street | Frisco, TX 75035
                                 </span>            
                              </div>
                           </blockquote>

                           
                           
                        </div>
                        <!-- Program show on mobile -->
                           <div class="alumni-spotlight__program alumni-spotlight__program--mobile">
                              <p class="home-alumni-label alumni-spotlight__program-label"><span>Church</span> Service</p>
                              <figure class="js-wrap image  image--cover alumni-spotlight__program-image" data-module="image">
                                 <img class="image__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-normal="
                                       {{URL::asset('2/wp-content/uploads/admissions-hero.jpg')}}" data-retina="
                                       {{URL::asset('2/wp-content/uploads/admissions-hero.jpg')}}" >
                              </figure>
                           </div>
                           <!-- End program show on mobile -->
                        <!-- Program show on desktop -->
                        <div class="alumni-spotlight__program alumni-spotlight__program--desktop">
                           <p class="home-alumni-label alumni-spotlight__program-label"><span>Church</span> Service</p>
                           <figure class="js-wrap image  image--cover alumni-spotlight__program-image" data-module="image">
                              <img class="image__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-normal="
                                       {{URL::asset('2/wp-content/uploads/admissions-hero.jpg')}}" data-retina="
                                       {{URL::asset('2/wp-content/uploads/admissions-hero.jpg')}}" >
                           </figure>
                        </div>
                        <!-- End program show on desktop -->
                       
                     </div>
                  </div>
               </section>
               
               
               
            </main>
         </div>
@include('footer2')
      <script type='text/javascript' src="{{URL::asset('2/wp-content/themes/cornell-tech/assets/main.minbec1.js?ver=de091c')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/jquery.json.min95b8.js?ver=2.3.2')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/gravityforms.min95b8.js?ver=2.3.2')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/placeholders.jquery.min95b8.js?ver=2.3.2')}}"></script>
   </body>
</html>