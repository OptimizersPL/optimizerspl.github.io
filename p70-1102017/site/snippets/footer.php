  <section style="padding-top: 20px;margin-bottom: 20px;">
  	  <div class="wrap wide row no-padding logos">
		  <?php $klienci = yaml($site->klienci())?>
		  <?php foreach($klienci as $klient): ?>
			  
				<div class="col-sm-3" style="line-height: 10em;-webkit-filter: grayscale(1);opacity:.4;">

						<img src="<?= $site->image($klient['Logo'])->url() ?>">
					
				</div>
			  
		  <?php endforeach ?>
	  </div>
  </section>
<section style="margin: 0">

  	<div id="map"></div>

</section>
   <footer class="footer cf" role="contentinfo">
   <section>
    <div class="wrap wide row stopka">
		<div class="col-sm-3" style="text-align: left;">
			 <img src="content/<?= $site->Logo_stopka()?>" style="width: 6em;">
			<p style="margin-top: 2em;"><?= $site->Stopka_kolumna1() ?></p>
		</div>
		<div class="col-sm-3">
		</div>
		<div class="col-sm-3 stopka_linki" style="text-align: left;">
			<?php $linki = yaml($site->stopka_kolumna2())?>
      		<?php foreach($linki as $link): ?>
				<a href=""><?= $link['Tekst'] ?></a>
			<?php endforeach ?>
		</div>
		<div class="col-sm-3 socials" style="text-align: left;">
			<?php $spolecznosciowe = yaml($site->social())?>
      		<?php foreach($spolecznosciowe as $strona): ?>
				<a href=""><?= kirbytext($strona['Tekst']) ?></a>
			<?php endforeach ?>
		</div>
	</div>
	   </section>
    <div class="wrap wide">
      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>
    
    </div>
  </footer>
<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);

      }
		initMap();
	  function geocodeAddress(geocoder, resultsMap) {
        var address = '<?php $adres = $site->address(); echo $adres; ?>';
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            console.log('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
</body>
</html>