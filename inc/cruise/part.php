
<section class="destination-area section--padding mbvek" style="padding: 10px 0; margin-top:-10px;">
  <div class="container">
    <div class="row align-items-center text-center mb-4">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2 class="sec__title">Cruise Ships</h2>
        </div>
      </div>
    </div>

    <style>
        .card-item {
  margin-bottom: 15px; /* or more if needed */
}

. 

    </style>
    <div class="row">
      <?php
      $ships = [
        ["images/cruise/alaska.jpg", "Alaska"],
        ["images/cruise/alaska-cruise.jpg", "Alaska Cruises"],
        ["images/cruise/aerial-view-blue-sea-boat.jpg", "Bahamas"],
        ["images/cruise/2915.jpg", "Canada"],
        ["images/cruise/pirate-ship-named-star-india-san-diego-coast.jpg", "Caribbean"],
        ["images/cruise/big-luxurious-cruise-ship-docked-nice-harbor-ai-generative.jpg", "Caribbean Cruises"]
      ];
      foreach ($ships as $ship) {
        echo '
        <div class="col-6 col-md-4 mb-4 "  >
          <div class="card-item destination-card" style="position: relative;">
            <div class="card-img" style="overflow: hidden; border-radius: 8px; height: 200px;
             margin: 0px 5px;">
              <a href="#" style="display: block; height: 100%; position: relative;">
                <img src="' . $ship[0] . '" alt="destination-img" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                <span class="badge" style="position: absolute; top: 10px; left: 10px; background: rgba(0,0,0,0.7); color: white; padding: 5px 10px; border-radius: 4px;">' . $ship[1] . '</span>
              </a>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- ================================
    START NEARBY CRUISES
================================= -->
<section class="destination-area section--padding mbvek" style="padding: 50px 0;">
  <div class="container">
    <div class="row align-items-center text-center mb-4">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2 class="sec__title">Cruises departing near you</h2>
          <p>Check out cruises leaving from departure ports near you.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $ports = [
        ["images/cruise/6954.jpg", "Europe"],
        ["images/cruise/966.jpg", "Europe Cruises"],
        ["images/cruise/2148153636.jpg", "Mexico"],
        ["images/cruise/weekend-getaway5.jpg", "Weekend Getways"]
      ];
      foreach ($ports as $port) {
        echo '
        <div class="col-6 col-md-3 mb-4">
          <div class="card-item destination-card" style="position: relative;">
            <div class="card-img" style="overflow: hidden; border-radius: 8px; height: 280px; margin: 0px 5px;">
              <a href="#" style="display: block; height: 100%; position: relative;">
                <img src="' . $port[0] . '" alt="destination-img" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                <span class="badge" style="position: absolute; top: 10px; left: 10px; background: rgba(0,0,0,0.7); color: white; padding: 5px 10px; border-radius: 4px;">' . $port[1] . '</span>
              </a>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>
</section>





