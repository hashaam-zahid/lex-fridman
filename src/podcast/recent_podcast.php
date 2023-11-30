
<?php 

for($i=1 ;$i < count($iCounter); $i++)
{
	       
?>
   
        <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
          <div class="image" style="background-image: url(<?php echo $image_url; ?>);"></div>
          <div class="text">

            <h3 class="font-weight-light"><a href="#">Episode <?php echo $item_title[$i] ?></a></h3>
              <div class="text-white mb-3"><span class="text-black-opacity-05"><small><?php echo ucfirst($item_category[$i]); ?> <span class="sep">/</span> <?php echo $item_pubDate[$i]; ?> <span class="sep">/</span><?php echo $duration[$i]; ?></small></span></div>

			<p class="mb-4">
			<?php 
		
            // Display the stored outline lines in groups of 5 outside the loop
            for ($j = $i * 5; $j < ($i * 5) + 5 && $j < count($outlines); $j++) {
                echo $outlines[$j] . "<br>";
            }
            ?>
			</p>


            <div class="player">
              <audio id="player2" preload="none" controls style="max-width: 100%">
                <source src="<?php echo $enclosureURL[$i]; ?>" type="<?php echo $enclosureType[$i]; ?>">
              </audio>
            </div>

          </div>
        </div>
		
		
<?php 

	
}
?>
