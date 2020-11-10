<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hertz</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
  <script>
    ! function (e) {
      "undefined" == typeof module ? this.charming = e : module.exports = e
    }(function (e, n) {
      "use strict";
      n = n || {};
      var t = n.tagName || "span",
        o = null != n.classPrefix ? n.classPrefix : "char",
        r = 1,
        a = function (e) {
          for (var n = e.parentNode, a = e.nodeValue, c = a.length, l = -1; ++l < c;) {
            var d = document.createElement(t);
            o && (d.className = o + r, r++), d.appendChild(document.createTextNode(a[l])), n.insertBefore(d, e)
          }
          n.removeChild(e)
        };
      return function c(e) {
        for (var n = [].slice.call(e.childNodes), t = n.length, o = -1; ++o < t;) c(n[o]);
        e.nodeType === Node.TEXT_NODE && a(e)
      }(e), e
    });
  </script>

</head>

<body>

  <section class="header" id="nav">
    <div class="container-fluid">
      <div class="row">
        <hr href="#logo">
       <hr style="height: 3px; color:#ffd100; background-color: #ffd100; width: 320px; border-radius: 5px;"
          class="trait">
        <img src="Hertz/1200px-Hertz-Logo.svg.png" alt="logo hertz" class="logo" width="250px"> </hr>
        <hr style="height: 3px; color: #ffd100; background-color:#ffd100; width: 920px; border-radius: 5px;"
          class="trait">
        </hr>
        </a>
      </div>
    </div>

    <div class="container-fluid descend">
      <div class="row  mt-5 ml-5">
        <div class="col-12 col-sm-6 col-xl-2">
          <div class="bouton">
            <div class="form-field contact-form submit-btn col-lg-12">
             <a href="#carouselfull"> <input class="submit-btn" type="submit" value="Louer un véhicule"></a>
            </div>
            <div class="form-field contact-form submit-btn col-lg-12">
              <a href="#toyota"> <input class="submit-btn" type="submit" value="Nos véhicules"></a>
            </div>
            <div class="form-field contact-form submit-btn col-lg-12">
              <a href="#marques"> <input class="submit-btn" type="submit" value="Nos partenaires"></a>
            </div>
            <div class="form-field contact-form submit-btn col-lg-12">
              <a href="#contactformulaire">  <input class="submit-btn" type="submit" value="Nous contacter"></a>
            </div>
            <div class="form-field contact-form submit-btn col-lg-12">
            <a href="http://localhost/hertz/voiture/login.php"target="blank"> <input class="submit-btn" type="submit" value="S'identifer"></a>
            </div>
            <div class="form-field contact-form submit-btn col-lg-12">
              <a href="http://localhost/hertz/voiture/inscription.php"target="blank">  <input class="submit-btn" type="submit" value="S'inscrire"></a>
            </div>
          </div>
        </div>
      </div>
    </div>


 <div class="container">
    <div class="container mb-5">
      <div class="row">
        <div class="col-12">
                        
          <div class="titrevoiture">
            <h2>Créez votre nouveau monde !</h2>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section id="vehicule ">

<div class="trait_toyota">
    <div class="container mt-3">
      <div class="row">
        <hr href="#logo">
        <hr style="height: 3px; color:#ffd100; background-color: #ffd100; width: 200px; border-radius: 5px;"
          class="trait2">
        <img src="Hertz/marques/toyota2.jpg" alt="logo toyota" class="logo" width="150px"> </hr><div id="toyota"></div>       
        <hr style="height: 3px; color: #ffd100; background-color:#ffd100; width: 600px; border-radius: 5px;"
          class="trait2">
        </hr>
      </div>
    </div>
</div>
    <div class="container-fluid mt-5">
      <div class="row justify-content-center">
        <div class="distance">
          <div class="example">
            <div class="col-12 col-xl-4"><img src="Hertz/voiture1.jpg" alt="tile3"></div>
            <div class="fadedbox">
              <div class="title text">COROLLA DESIGN</div>
            </div>
          </div>
        </div>

        <div class="example">
          <div class="col-12 col-xl-4"><img src="Hertz/voiture2.jpg" alt="tile3"></div>
          <div class="fadedbox">
            <div class="title text">PRIUS DYNAMIC</div>
          </div>
        </div>


        <div class="example">
          <div class="col-12 col-xl-4"><img src="Hertz/voiture3.jpg" alt="tile3"></div>
          <div class="fadedbox">
            <div class="title text">COROLLA TOURING</div>
          </div>
        </div>

        <div class="container mt-3">
          <div class="row">
            <hr href="#logo">
            <hr style="height: 3px; color:#ffd100; background-color: #ffd100; width: 200px; border-radius: 5px;"
              class="trait2">
            <img src="Hertz/marques/citroen3.jpg" alt="logo citroen" class="logo" width="150px"> </hr><div id="Citroën"></div>
            <hr style="height: 3px; color: #ffd100; background-color:#ffd100; width: 600px; border-radius: 5px;"
              class="trait2">
            </hr>
          </div>
        </div>


        <div class="container-fluid mt-5 ">
          <div class="row justify-content-center">
            <div class="distance">
              <div class="example">
                <div class="col-12 col-xl-4 "><img src="Hertz/voiture4.jpg" alt="tile3"></div>
                <div class="fadedbox">
                  <div class="title text">CITROËN C3</div>
                </div>
              </div>
            </div>
            <div class="example">
              <div class="col-12 col-xl-4 "><img src="Hertz/voiture5.jpg" alt="tile3"></div>
              <div class="fadedbox">
                <div class="title text">CITROËN BERLINGO</div>
              </div>
            </div>

            <div class="example">
              <div class="col-12 col-xl-4 "><img src="Hertz/V6.jpg" alt="tile3"></div>
              <div class="fadedbox">
                <div class="title text">CITROËN C4 Cactus</div>
              </div>
            </div>


            <div class="container mt-3">
              <div class="row">
                <hr href="#logo">
                <hr style="height: 3px; color:#ffd100; background-color: #ffd100; width: 200px; border-radius: 5px;"
                  class="trait2">
                <img src="Hertz/marques/peugeot2.jpg" alt="logo peugeot" class="logo" width="150px"> </hr><div id="Peugeot"></div>
                <hr style="height: 3px; color: #ffd100; background-color:#ffd100; width: 600px; border-radius: 5px;"
                  class="trait2">
                </hr>
              </div>
            </div>


            <div class="container-fluid mt-5 ">
              <div class="row justify-content-center">
                <div class="distance">
                  <div class="example">
                    <div class="col-12 col-xl-4 "><img src="Hertz/voiture7.jpg" alt="tile3"></div>
                    <div class="fadedbox">
                      <div class="title text">PEUGEOT 208</div>
                    </div>
                  </div>
                </div>

                <div class="example">
                  <div class="col-12 col-xl-4 "><img src="Hertz/voiture8.jpg" alt="tile3"></div>
                  <div class="fadedbox">
                    <div class="title text">PEUGEOT 508</div>
                  </div>
                </div>

                <div class="example">
                  <div class="col-12 col-xl-4 "><img src="Hertz/voiture9.jpg" alt="tile3"></div>
                  <div class="fadedbox">
                    <div class="title text">PEUGEOT Rifter</div>
                  </div>
                </div>

                <div class="container mt-3">
                  <div class="row">
                    <hr href="#logo">
                    <hr style="height: 3px; color:#ffd100; background-color: #ffd100; width: 200px; border-radius: 5px;"
                      class="trait2">
                    <img src="Hertz/marques/volswagen2.jpg" alt="logo peugeot" class="logo" width="120px"> </hr><div id="Volkswagen"></div>
                    <hr style="height: 3px; color: #ffd100; background-color:#ffd100; width: 600px; border-radius: 5px;"
                      class="trait2">
                    </hr>
                  </div>
                </div>


                <div class="container-fluid mt-5  ">
                  <div class="row justify-content-center">
                    <div class="distance">
                      <div class="example">
                        <div class="col-12 col-xl-4 "><img src="Hertz/voiture10.jpg" alt="tile3"></div>
                        <div class="fadedbox">
                          <div class="title text">Golf GTI</div>
                        </div>
                      </div>
                    </div>
                    <div class="example">
                      <div class="col-12 col-xl-4 "><img src="Hertz/voiture112.jpg" alt="tile3"></div>
                      <div class="fadedbox">
                        <div class="title text">T-Cross</div>
                      </div>
                    </div>
                  
                    <div class="example">
                      <div class="col-12 col-xl-4 "><img src="Hertz/voiture12.jpg" alt="tile3"></div>
                      <div class="fadedbox">
                        <div class="title text">T-ROC CABRIOLET</div>
                      </div>
                    </div>
                 
                    <div class="container mt-3">
                      <div class="row">
                        <hr href="#logo">
                        <hr
                          style="height: 3px; color:#ffd100; background-color: #ffd100; width: 200px; border-radius: 5px;"
                          class="trait2">
                        <img src="Hertz/marques/renault2.jpg" alt="logo peugeot" class="logo" width="150px"> </hr><div id="Renault"></div>
                        <hr
                          style="height: 3px; color: #ffd100; background-color:#ffd100; width: 600px; border-radius: 5px;"
                          class="trait2">
                        </hr>
                      </div>
                    </div>
                 


                  <div class="container-fluid mt-5 ">
                    <div class="row justify-content-center">
                      <div class="distance">
                        <div class="example">
                          <div class="col-12 col-xl-4 "><img src="Hertz/voiture13.jpg" alt="tile3"></div>
                          <div class="fadedbox">
                            <div class="title text">Clio 4</div>
                          </div>
                        </div>
                      </div>


                      <div class="example">
                        <div class="col-12 col-xl-4 "><img src="Hertz/voiture14.jpg" alt="tile3"></div>
                        <div class="fadedbox">
                          <div class="title text">Megane RS</div>
                        </div>
                      </div>

                      <div class="example">
                        <div class="col-12 col-xl-4 "><img src="Hertz/voiture15.jpg" alt="tile3"></div>
                        <div class="fadedbox">
                          <div class="title text">Espace</div>
                        </div>
                      </div>

                      <div class="container mt-3">
                        <div class="row">
                          <hr href="#logo">
                          <hr
                            style="height: 3px; color:#ffd100; background-color: #ffd100; width: 200px; border-radius: 5px;"
                            class="trait2">
                          <img src="Hertz/marques/lexus6.jpg" alt="logo peugeot" class="logo" width="150px"> </hr><div id="Lexus"></div>
                          <hr
                            style="height: 3px; color: #ffd100; background-color:#ffd100; width: 600px; border-radius: 5px;"
                            class="trait2">
                          </hr>
                        </div>
                      </div>

                      <div class="container-fluid mt-5 ">
                        <div class="row justify-content-center">
                          <div class="distance">
                            <div class="example">
                              <div class="col-12 col-xl-4 "><img src="Hertz/voiture16.jpg" alt="tile3"></div>
                              <div class="fadedbox">
                                <div class="title text">Lexus LC</div>
                              </div>
                            </div>
                          </div>


                          <div class="example">
                            <div class="col-12 col-xl-4 "><img src="Hertz/voiture17.jpg" alt="tile3"></div>
                            <div class="fadedbox">
                              <div class="title text">Lexus CT</div>
                            </div>
                          </div>

                          <div class="example">
                            <div class="col-12 col-xl-4 "><img src="Hertz/voiture18.jpg" alt="tile3"></div>
                            <div class="fadedbox">
                              <div class="title text">Lexus UX 250h 2WD</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

  </section>


  <section id="marques">
    <div class="container-fluid mb-5">
      <div class="row ">
        <div class="col-12">
          <h2 class="text-center">Nos partenaires automobiles</h2>
        </div>
      </div>
      <div class="imgfull ">
        <img src="hertz/marques/citroen3.jpg">
        <img src="hertz/marques/lexus6.jpg">
        <img src="hertz/marques/peugeot2.jpg">
        <img src="hertz/marques/renault2.jpg">
        <img src="hertz/marques/toyota2.jpg">
        <img src="hertz/marques/volswagen2.jpg">
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

  <section id="carouselfull">

    <div class="swiper-container slideshow">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V1.jpg">
          </div>
          <span class="slide-title">COROLLA DESIGN - BERLINE</span>
        </div>

        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V2.jpg"></div>
          <span class="slide-title">PRIUS DYNAMIC - BERLINE</span>
        </div>

        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V35.jpg"></div>
          <span class="slide-title">COROLLA TOURING SPORTS DESIGN</span>
        </div>

        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V4.jpg"></div>
          <span class="slide-title">CITROËN C3</span>
        </div>

        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V5.jpg"></div>
          <span class="slide-title">CITROËN BERLINGO</span>
        </div>

        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V6.jpg"></div>
          <span class="slide-title">CITROËN C4 Cactus</span>
        </div>

        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V7.jpg"></div>
          <span class="slide-title">PEUGEOT 208</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V8.jpg"></div>
          <span class="slide-title">PEUGEOT 508</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V9.jpg"></div>
          <span class="slide-title">PEUGEOT Rifter</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V10.jpg"></div>
          <span class="slide-title">GOLF GTI</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V11.jpg"></div>
          <span class="slide-title">T-CROSS</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V121.jpg"></div>
          <span class="slide-title">T-ROC CABRIOLET</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V13.jpg"></div>
          <span class="slide-title">Clio 4</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V14.jpg"></div>
          <span class="slide-title">Megane RS</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V15.jpg"></div>
          <span class="slide-title">Espace</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V16.jpg"></div>
          <span class="slide-title">Lexus LC</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V17.jpg"></div>
          <span class="slide-title">Lexus CT</span>
        </div>
        <div class="swiper-slide slide">
          <button type="submit" class="slide-title2 mb-5">Réserver</button>
          <div class="slide-image"><img src="hertz/voiture-font/V18.jpg"></div>
          <span class="slide-title">Lexus UX 250h 2WD</span>
        </div>


      </div>

      <div class="slideshow-pagination"></div>

      <div class="slideshow-navigation">
        <div class="slideshow-navigation-button prev"><span class="fas fa-chevron-left"></span></div>
        <div class="slideshow-navigation-button next"><span class="fas fa-chevron-right"></span></div>
      </div>

    </div>

  </section>
  <script>
    // The Slideshow class.
    class Slideshow {
      constructor(el) {

        this.DOM = {
          el: el
        };

        this.config = {
          slideshow: {
            delay: 3000,
            pagination: {
              duration: 4,
            }
          }
        };

        // Set the slideshow
        this.init();

      }
      init() {

        var self = this;

        // Charmed title
        this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
        this.DOM.slideTitle.forEach((slideTitle) => {
          charming(slideTitle);
        });

        // Set the slider
        this.slideshow = new Swiper(this.DOM.el, {

          loop: true,
          autoplay: {
            delay: this.config.slideshow.delay,
            disableOnInteraction: false,
          },
          speed: 500,
          preloadImages: true,
          updateOnImagesReady: true,

          // lazy: true,
          // preloadImages: false,

          pagination: {
            el: '.slideshow-pagination',
            clickable: true,
            bulletClass: 'slideshow-pagination-item',
            bulletActiveClass: 'active',
            clickableClass: 'slideshow-pagination-clickable',
            modifierClass: 'slideshow-pagination-',
            renderBullet: function (index, className) {

              var slideIndex = index,
                number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);

              var paginationItem = '<span class="slideshow-pagination-item">';
              paginationItem += '<span class="pagination-number">' + number + '</span>';
              paginationItem = (index <= 18) ? paginationItem +
                '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' :
                paginationItem;
              paginationItem += '</span>';

              return paginationItem;

            },
          },

          // Navigation arrows
          navigation: {
            nextEl: '.slideshow-navigation-button.next',
            prevEl: '.slideshow-navigation-button.prev',
          },

          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },

          on: {
            init: function () {
              self.animate('next');
            },
          }

        });

        // Init/Bind events.
        this.initEvents();

      }
      initEvents() {

        this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
        //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());

        this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));

        this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));

      }
      animate(direction = 'next') {

        // Get the active slide
        this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
          this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
          this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
          this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');

        // Reverse if prev  
        this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(
          this.DOM.activeSlideTitleLetters).reverse();

        // Get old slide
        this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el
          .querySelector('.swiper-slide-next');
        if (this.DOM.oldSlide) {
          // Get parts
          this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
            this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span');
          // Animate
          this.DOM.oldSlideTitleLetters.forEach((letter, pos) => {
            TweenMax.to(letter, .3, {
              ease: Quart.easeIn,
              delay: (this.DOM.oldSlideTitleLetters.length - pos - 1) * .04,
              y: '50%',
              opacity: 0
            });
          });
        }

        // Animate title
        this.DOM.activeSlideTitleLetters.forEach((letter, pos) => {
          TweenMax.to(letter, .6, {
            ease: Back.easeOut,
            delay: pos * .05,
            startAt: {
              y: '50%',
              opacity: 0
            },
            y: '0%',
            opacity: 1
          });
        });

        // Animate background
        TweenMax.to(this.DOM.activeSlideImg, 1.5, {
          ease: Expo.easeOut,
          startAt: {
            x: direction === 'next' ? 200 : -200
          },
          x: 0,
        });

        //this.animatePagination()

      }
      animatePagination(swiper, paginationEl) {

        // Animate pagination
        this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
        this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
        this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector(
          '.pagination-separator-loader');

        console.log(swiper.pagination);
        // console.log(swiper.activeIndex);

        // Reset and animate
        TweenMax.set(this.DOM.paginationItemsLoader, {
          scaleX: 0
        });
        TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
          startAt: {
            scaleX: 0
          },
          scaleX: 1,
        });


      }

    }

    const slideshow = new Slideshow(document.querySelector('.slideshow'));
  </script>

<!-- formulaire -->
  <section class="get-in-touch">
    <div id="contactformulaire"></div>
    <h1 class="title">Nous contacter</h1>
    <form class="contact-form row">
      <div class="form-field col-lg-6">
        <input id="name" class="input-text js-input" type="text" required>
        <label class="label" for="name">Nom</label>
      </div>
      <div class="form-field col-lg-6 ">
        <input id="email" class="input-text js-input" type="email" required>
        <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col-lg-6 ">
        <input id="company" class="input-text js-input" type="text" required>
        <label class="label" for="company">Nom d'entreprise</label>
      </div>
      <div class="form-field col-lg-6 ">
        <input id="phone" class="input-text js-input" type="text" required>
        <label class="label" for="phone">Numéro de téléphone</label>
      </div>
      <div class="form-field col-lg-12">
        <input id="message" class="input-text js-input" type="text" required>
        <label class="label" for="message">Message</label>
      </div>
      <div class="form-field col-lg-12">
        <input class="submit-btn" type="submit" value="Envoyer">
      </div>
    </form>
  </section>

  
  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>Chez Hertz</h6>
          <p class="text-justify">
            Bienvenue chez Hertz. En 1918, notre fondateur Walter Jacobs eut la belle idée d’introduire la location de
            voitures, que nous réinventons sans cesse depuis. Nos produits innovants et la qualité de nos prestations
            simplifient la vie de nos clients, et notre programme de fidélité, Gold Plus Rewards, est classé parmi les
            meilleurs au monde.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Catégories</h6>
          <ul class="footer-links">
            <li><a href="#toyota">Toyota</a></li>
            <li><a href="#Citroën">Citroën</a></li>
            <li><a href="#Peugeot">Peugeot</a></li>
            <li><a href="#Volkswagen">Volkswagen</a></li>
            <li><a href="#Renault">Renault</a></li>
            <li><a href="#Lexus">Lexus</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Nos liens</h6>
          <ul class="footer-links">
            <li><a href="#carouselfull">Louer un véhicule</a></li>
            <li><a href="#toyota">Nos véhicules</a></li>
            <li><a href="#marques">Nos partenaires</a></li>
            <li><a href="#contactformulaire">Nous contacter</a></li>
            <li><a href="http://localhost/hertz/login.php"target="blank">S'identifier</a></li>
            <li><a href="http://localhost/hertz/inscription.php"target="blank">S'inscrire</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy;  2019 The Hertz Corporation.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><img src=""><a class="facebook" href="https://fr-fr.facebook.com/"target="blank"><i class="fa fa-facebook">F</i></a></li>
            <li><a class="twitter" href="https://twitter.com/?lang=fr"target="blank"><i class="fa fa-twitter">T</i></a></li>
            <li><a class="dribbble" href="https://www.instagram.com/?hl=fr"target="blank"><i class="fa fa-dribbble">I</i></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com/home"target="blank"><i class="fa fa-linkedin">L</i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>