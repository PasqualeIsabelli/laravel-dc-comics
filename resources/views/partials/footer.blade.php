<?php
  $comicsList = [
    ['name' => 'Characters'],
    ['name' => 'Comics'],
    ['name' => 'Movies'],
    ['name' => 'Tv'],
    ['name' => 'Games'],
    ['name' => 'Videos'],
    ['name' => 'News'],
  ];

  $shopList = [
    ['name' => 'Shop DC'],
    ['name' => 'Shop DC Collectibles'],
  ];
  
  $dcList = [
    ['name' => 'Terms of USe'],
    ['name' => 'Privacy policy (New)'],
    ['name' => 'Ad Choices'],
    ['name' => 'Advertising'],
    ['name' => 'Jobs'],
    ['name' => 'Subscriptions'],
    ['name' => 'Talent Workshops'],
    ['name' => 'CPSC Certificates'],
    ['name' => 'Ratings'],
    ['name' => 'Shop Help'],
    ['name' => 'Contact Us'],
  ];

  $sitesList = [
    ['name' => 'DC'],
    ['name' => 'MAD Magazine'],
    ['name' => 'DC Kids'],
    ['name' => 'DC Universe'],
    ['name' => 'DC Power Visa'],
  ]
?>

<main>
  <div class="container-fluid bg-footer">
    <div class="container d-flex justify-content-between">
      <div class="d-flex ul-container">
        <div class="d-flex">
          <ul>
            <h4 class="text-white fw-bold">DC COMICS</h4>
              @foreach ($comicsList as $link)
                <li class="nav-item list-unstyled"><a class="nav-link" href="#0">{{ $link['name'] }}</a></li>
              @endforeach
              <h4 class="text-white fw-bold mt-3">SHOP</h4>
              @foreach ($shopList as $link)
                <li class="nav-item list-unstyled"><a class="nav-link" href="#0">{{ $link['name'] }}</a></li>
              @endforeach
          </ul>
          <ul>
            <h4 class="text-white fw-bold">DC</h4>
              @foreach ($dcList as $link)
                <li class="nav-item list-unstyled"><a class="nav-link" href="#0">{{ $link['name'] }}</a></li>
              @endforeach
          </ul>
          <ul>
            <h4 class="text-white fw-bold">SITES</h4>
              @foreach ($sitesList as $link)
                <li class="nav-item list-unstyled"><a class="nav-link" href="#0">{{ $link['name'] }}</a></li>
              @endforeach
          </ul>
        </div>
      </div>
      <div class="dc-bg"></div>
    </div>
  </div>
  <div class="container-fluid bg-color">
    <div class="container d-flex justify-content-between">
      <div style="line-height: 90px">
        <button type="button" class="btn btn-outline-primary text-white fs-5 fw-bold rounded-0 border-5">SIGN-UP NOW!</button>
      </div>
      <div style="line-height: 90px" class="d-flex gap-3">
        <a href="#0" class="fs-3 fw-bold text-decoration-none me-3">FOLLOW US</a>
        <a href="#0"><img class="width" src="/images/footer-facebook.png" alt="facebook"></a>
        <a href="#0"><img class="width" src="/images/footer-twitter.png" alt="twitter"></a>
        <a href="#0"><img class="width" src="/images/footer-youtube.png" alt="youtube"></a>
        <a href="#0"><img class="width" src="/images/footer-pinterest.png" alt="pinterest"></a>
        <a href="#0"><img class="width" src="/images/footer-periscope.png" alt="periscope"></a>
      </div>
    </div>
  </div>
</main>