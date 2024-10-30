@extends('Formateurs.profil')
<link rel="stylesheet" href="{{asset('css/setting.css')}}">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    @section('conteneur')

    <div class="header__wrapper">
        <header></header>
        <div class="cols__container">
          <div class="left__col">
            <div class="img__container">
              <img src="/images/user.jpeg" alt="Anna Smith" />
              <span></span>
            </div>
            <h2>Cherie Falilou</h2>
            <p>DFE</p>
            <p>cherie@example.com</p>
  
            <ul class="about">
              <li><span>4,073</span>Followers</li>
              <li><span>322</span>Following</li>
              <li><span>200,543</span>Attraction</li>
            </ul>
  
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam
                erat volutpat. Morbi imperdiet, mauris ac auctor dictum, nisl
                ligula egestas nulla.
              </p>
  
              <ul>
                <li><i class="fab fa-twitter"></i></li>
                <i class="fab fa-pinterest"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-dribbble"></i>
              </ul>
            </div>
          </div>
          <div class="right__col">
            <nav>
              <ul>
                <li><a href="">photos</a></li>
                <li><a href="">Reglages</a></li>
                <li><a href="">groups</a></li>

              </ul>
              <button>Follow</button>
            </nav>
  
            <div class="photos">
              <img src="/images/img_1.avif" alt="Photo" />
              <img src="/images/img_2.avif" alt="Photo" />
              <img src="/images/img_3.avif" alt="Photo" />
              <img src="/images/img_4.avif" alt="Photo" />
              <img src="/images/img_5.avif" alt="Photo" />
              <img src="/images/img_6.avif" alt="Photo" />
            </div>
          </div>
        </div>
      </div>
    </body>
    @endsection