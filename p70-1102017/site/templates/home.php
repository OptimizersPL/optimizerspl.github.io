<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap wide">
    <div>
       <?= $page->slider()->kirbytext() ?>
      </div>
     
      <div class="intro text" style="text-align: left;margin-top: 50px;padding-left: 15px;padding-right: 15px;">
        <?= $page->text1()->kirbytext() ?>
      </div>
    </header>
  
    <section>
      <div class="wrap wide row" style="max-width: 1217px;">
      <div style="display: table;width: 100%;position: relative;padding-bottom: 85px;">
      <?php $sale = yaml($page->sale())?>
      <?php foreach($sale as $sala): ?>
		  <div style="width: 33.33333333%;display: table-cell;padding-left: 25px;padding-right: 25px;">
			
			  <a href="<?= $sala['Link_url'] ?>" style="display: block;margin-bottom: 40px;"><img src="<?= $page->image($sala['Zdjęcie'])->url() ?>"></a>
			  <div style="padding-left: 15px;padding-right: 15px;"><?= kirbytext($sala['Tekst']) ?></div>
			  <a href="<?= $sala['Link_url'] ?>" style="display: block;margin-top: 40px;padding-left: 15px;padding-right: 15px;"><?= kirbytext($sala['Link_text']) ?></a>
			
			  <a href="rezerwacje" style="display: block;margin-top: 40px;position: absolute;bottom: 0;padding-left: 15px;padding-right: 15px;"><div class="btn btn-reverse"><?= $sala['Button_text'] ?></div></a>
			 
		  </div>
	  <?php endforeach ?>
		  </div>
      </div>
    </section>
    <section>
    	<div class="wrap wide row no-padding">
    		<?php $idea = yaml($page->idea())?>
		<div style="display: table;width: 100%;">
			<div style="width: 41.66666667%;display: table-cell;vertical-align: middle;padding-right: 50px;padding-left: 15px;">
				<div class="intro" style="margin-bottom: 50px;"><h1 style="text-align: left;"><?= $idea['Tytuł'] ?></h1></div>
				<?= kirbytext($idea['Tekst']) ?>
				<a href="<?= $idea['Link_url'] ?>" style="display: block;margin-top: 40px;"><?= kirbytext($idea['Link_text']) ?></a>
			</div>
			<div style="width: 58.33333333%;display: table-cell;vertical-align: middle;">
				<a href="<?= $idea['Link_url'] ?>"><img src="<?= $page->image($idea['Zdjęcie'])->url() ?>"></a>
			</div>
			</div>
		</div>
	</section>
  <section>
	  <div class="wrap wide row">
	  	<div class="intro text" style="width: 70%;margin: 0 auto;">
			<h1 style="margin-bottom: 50px;"><?= $page->text2() ?></h1>
			<a href="rezerwacje"><div class="btn">Rezerwuj</div></a>
      	</div>
	  </div>
  </section>


  </main>

<?php snippet('footer') ?>