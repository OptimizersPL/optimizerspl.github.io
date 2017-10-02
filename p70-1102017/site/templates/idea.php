<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap wide">
      <div class="intro text" style="text-align: left;padding-left: 15px;padding-right: 15px;">
        <h1 style="text-align: left;margin-bottom: 30px;"><?= $page->title()->html() ?></h1>
		    <h2 style="margin-bottom: 30px;"><?= $page->intro() ?></h2>
        <?= $page->image(['slider1.jpg']) ?>
      </div>
    </header>

    <section>
  		<div class="intro text wrap wide row">
  			<h1 style="display: inline-block;margin-right: 2em;"><?= $page->Rezerwacja_text() ?></h1>
  			<a href="rezerwacje"><div class="btn">Rezerwuj</div></a>
  		</div>
  	</section>

    <section>
  	<?php $cechy = yaml($page->Cechy())?>
  	<?php foreach($cechy as $cecha): ?>
  	<div style="display: table;width: 100%;">
  		<?php if($cecha['Pozycja_zdjęcia']=='prawa'): ?>
  		<div class="text wrap wide row no-padding" style="margin-bottom: 100px;">
  			<div style="width: 58.33333333%;display: table-cell;vertical-align: middle;padding-right: 50px;">
  				<img src="<?= $page->image($cecha['Zdjęcie'])->url() ?>">
  			</div>
  			<div style="width: 41.66666667%;display: table-cell;vertical-align: middle;padding-right: 15px;">
  				<h1 style="text-align: left;font-weight: inherit;margin-bottom: 40px;"><?= kirbytext($cecha['Tytuł']) ?></h1>
  				<p><?= $cecha['Tekst'] ?></p>
  			</div>
  		</div>
  		<?php else: ?>
  		<div class="text wrap wide row no-padding"  style="margin-bottom: 100px;">
  			<div style="width: 41.66666667%;display: table-cell;vertical-align: middle;padding-left: 15px;">
  				<h1 style="text-align: left;font-weight: inherit;margin-bottom: 40px;"><?= kirbytext($cecha['Tytuł']) ?></h1>
  				<p><?= $cecha['Tekst'] ?></p>
  			</div>
  			<div style="width: 58.33333333%;display: table-cell;vertical-align: middle;padding-left: 50px;">
  				<img src="<?= $page->image($cecha['Zdjęcie'])->url() ?>">
  			</div>
  		</div>
  		<?php endif ?>
  		</div>
  	<?php endforeach ?>
  	</section>

    <section>
      <div class="wrap wide row" style="max-width: 1217px;">
      <h1 style="text-align: left;margin-bottom: 30px;"><?= $page->about_subheader() ?></h1>
      <p style="text-align: left;margin-bottom: 30px;"><?= $page->about_text() ?></p>
      <div style="display: table;width: 100%;position: relative;padding-bottom: 85px;">
      <?php $sale = yaml($page->sale())?>
      <?php foreach($sale as $sala): ?>
      <div style="width: 33.33333333%;display: table-cell;padding-left: 25px;padding-right: 25px;">

        <a href="<?= $sala['Link_url'] ?>" style="display: block;margin-bottom: 40px;"><img src="<?= $page->image($sala['Zdjęcie'])->url() ?>"></a>
        <div style="padding-left: 15px;padding-right: 15px;"><?= kirbytext($sala['Tekst']) ?></div>

      </div>
    <?php endforeach ?>
      </div>
      </div>
    </section>

    <section>
  		<div class="intro text wrap wide row">
  		<div class="intro text" style="margin-bottom: 0;width: 70%;margin: 0 auto;">
  			<strong><?= $page->Rezerwacja_text2()->kirbytext() ?></strong>
  			<a href="rezerwacje" style="display: block;margin-top: 50px;"><div class="btn">Rezerwuj</div></a>
  			</div>
  		</div>
  	</section>

  </main>

<?php snippet('footer') ?>
