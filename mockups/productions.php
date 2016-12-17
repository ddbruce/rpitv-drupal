<!doctype html>
<html>
<head>
  <title>Index</title>
  <?php echo file_get_contents('partials/head.html'); ?>
</head>
<body class="grey darken-4">
  <?php echo file_get_contents('partials/nav.html'); ?>
  <div class="container section">
    <div class="row">
      <div class="col s12">
        <h4 class="white-text">Productions</h4>
      </div>
    </div>
    <div class="row">
      <div class="col m2 categories">
        <div class="white-text">
          Browse by category
        </div>
        <ul class="collection grey">
          <ul class="collection with-header grey">
            <a href="productions/sports"><li class="collection-header">Sports</li></a>
            <a href="productions/hockey"><li class="collection-item">Hockey</li></a>
            <a href="productions/football"><li class="collection-item">Football</li></a>
            <a href="productions/soccer"><li class="collection-item">Soccer</li></a>
          </ul>
          <ul class="collection with-header">
            <a href="productions/entertainment"><li class="collection-header">Entertainment</li></a>
            <a href="productions/culture"><li class="collection-item">Culture</li></a>
            <a href="productions/music"><li class="collection-item">Music</li></a>
          </ul>
        </ul>
      </div>
      <div class="col m10">
        <div class="row">
          <div class="col s12 m4">
            <div class="card featured-production">
              <div class="card-image">
                <img src="http://rpitv.org/sys_i/wide/538.png">
                <span class="card-title">Sheer Idiocy - December 2016</span>
              </div>
              <div class="card-content">
                <p class="truncate">RPI's only improv troupe performs in Mother's for the annual winter show.</p>
              </div>
              <div class="card-action">
                <a href="/productions/1191-sheer-idiocy-december-2016"><i class="material-icons">videocam</i> Watch live</a>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card featured-production">
              <div class="card-image">
                <img src="http://rpitv.org/sys_i/wide/822.jpg">
                <span class="card-title">ACHA Hockey vs. UMass Amherst</span>
              </div>
              <div class="card-content">
                <p class=truncate>The ACHA-league RPI Engineers take on the UMass Amherst something-or-others at the Houston Field House.</p>
              </div>
              <div class="card-action">
                <a class="on-demand" href="/productions/1190-acha-hockey-vs-umass-amherst">Watch on-demand</a>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card featured-production">
              <div class="card-image">
                <img src="http://rpitv.org/sys_i/original/1007.jpg">
                <span class="card-title">Women's Hockey vs. Quinnipiac</span>
              </div>
              <div class="card-content">
                <p class=truncate>The Engineers take on the Bobcats in this Friday night rouse.</p>
              </div>
              <div class="card-action">
                <a class="on-demand" href="/productions/1190-acha-hockey-vs-umass-amherst">Watch on-demand</a>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card featured-production">
              <div class="card-image">
                <img src="http://rpitv.org/sys_i/original/1010.png">
                <span class="card-title">Jazz at Rensselaer: Big Swells and Jingle Bells and a Longer Title</span>
              </div>
              <div class="card-content">
                <p class=truncate>The Engineers take on the Bobcats in this Friday night rouse.</p>
              </div>
              <div class="card-action">
                <a class="on-demand" href="/productions/1190-acha-hockey-vs-umass-amherst">Watch on-demand</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo file_get_contents('partials/footer.html'); ?>
  <?php echo file_get_contents('partials/bottom_scripts.html'); ?>
</body>
</html>
