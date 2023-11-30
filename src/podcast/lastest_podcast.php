<div class="site-blocks-cover overlay" style="background-image: url(<?php echo $image_url; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-white font-weight-light mb-2 display-4">Episode <?php echo ($item_title[0]); ?></h2>
            <div class="text-white mb-4"><span class="text-white-opacity-05"><small><?php echo ucfirst($item_category[0]); ?> | <?php echo $item_pubDate[0]; ?>| <?php echo $duration[0]; ?></small></span></div>
            <p><a href="https://lexfridman.com/" class="btn btn-primary btn-sm py-3 px-4 small leaveLink">More Podcasts</a></p>

            <div class="player">
              <audio id="player2" preload="none" controls style="max-width: 100%">
                <source src="<?php echo $enclosureURL[0]; ?>" type="<?php echo $enclosureType[0]; ?>">
			  <?php //echo ( $enclosureType[0]); ?>
              </audio>
            </div>

          </div>
        </div>
      </div>
    </div> 