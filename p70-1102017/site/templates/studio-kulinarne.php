<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap wide">
     
      <div class="intro text" style="padding-left:15px;padding-right:15px;">
       <h1 style="text-align: left;margin-bottom: 30px;"><?= $page->title()->html() ?></h1>
		  <h2 style="text-align: left;"><?= $page->intro()->kirbytext() ?></h2>
      </div>

    </header>
      <section style="padding-top:0;">
		<div class="text wrap wide row no-padding">
		<div style="display: table;width: 100%;">
		<div style="width: 50%;display: table-cell;vertical-align: middle;padding-left:15px;">
			<?php $kolumna1 = yaml($page->kolumna1())?>
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-right: 50px;">
				<?= kirbytext($kolumna1['text1']) ?>
				<br>
				<br>
				<?= kirbytext($kolumna1['text2']) ?>
			</div>
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-right: 50px;">
			<?php $kolumna2 = yaml($page->kolumna2())?>
				<?= kirbytext($kolumna2['text1']) ?>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?= kirbytext($kolumna2['text2']) ?>
			</div>
			</div>
			<div style="width: 50%;display: table-cell;vertical-align: middle;">
			<?php $zdjecie1 = yaml($page->zdjęcie1());?>
				<img src="<?= $page->image($zdjecie1)->url() ?>">
			</div>
			</div>
		</div>
	</section>
  <section style="margin-bottom: 100px;">
		<div class="intro text wrap wide row">
			<h1 style="display: inline-block;margin-right: 2em;"><?= $page->Rezerwacja_text() ?></h1>
			<a href="rezerwacje"><div class="btn">Rezerwuj</div></a>
		</div>
	</section>
  <section style="background-color: #d1d8da;padding-top: 100px;">
 	  <?php $rent = yaml($page->Rent())?>
  	  <div class="text wrap wide row no-padding">
		  <h1 style="text-align: left;margin-bottom: 30px;padding-left:15px;padding-right:15px;"><?= kirbytext($rent['tytuł']) ?></h1>
		  <h2 style="margin-bottom: 100px;padding-left:15px;padding-right:15px;"><?= kirbytext($rent['text']) ?></h2>

      </div>
	<?php $wydarzenia = yaml($page->Wydarzenia())?>
	<?php foreach($wydarzenia as $wydarzenie): ?>
		<?php if($wydarzenie['Pozycja_zdjęcia']=='prawa'): ?>
		<div class="text wrap wide row no-padding" style="margin-bottom: 100px;">
		<div style="display: table;width: 100%;">
			<div style="width: 58.33333333%;display: table-cell;vertical-align: middle;">
				<img src="<?= $page->image($wydarzenie['Zdjęcie'])->url() ?>">
			</div>
			<div style="width: 41.66666667%;display: table-cell;vertical-align: middle;padding-left: 50px;padding-right: 15px;">
				<h1 style="text-align: left;margin-bottom: 30px;"><?= kirbytext($wydarzenie['Tytuł']) ?></h1>
				<p><?= $wydarzenie['Tekst'] ?></p>
			</div>
			</div>
		</div>
		<?php else: ?>
		<div class="text wrap wide row no-padding"  style="margin-bottom: 100px;">
		<div style="display: table;width: 100%;">
			<div style="width: 41.66666667%;display: table-cell;vertical-align: middle;padding-right: 50px;padding-left: 15px;">
				<h1 style="text-align: left;margin-bottom: 30px;"><?= kirbytext($wydarzenie['Tytuł']) ?></h1>
				<p><?= $wydarzenie['Tekst'] ?></p>
			</div>
			<div style="width: 58.33333333%;display: table-cell;vertical-align: middle;">
				<img src="<?= $page->image($wydarzenie['Zdjęcie'])->url() ?>">
			</div>
			</div>
		</div>
		<?php endif ?>
	<?php endforeach ?>

	<?php $kucharze = yaml($page->Kucharze())?>
	<div class="text wrap wide row" style="padding-bottom: 100px;max-width: 1217px;">
	<?php foreach($kucharze as $kucharz): ?>
			<div class="col-sm-4">
			<img src="<?= $page->image($kucharz['zdjęcie'])->url() ?>" style="margin-bottom: 30px;">
				<h2 style="margin-bottom: 30px;padding-left:15px;padding-right:15px;"><?= kirbytext($kucharz['nazwa']) ?></h2>
				<div style="padding-left:15px;padding-right:15px;"><p><?= $kucharz['text'] ?></p></div>
			</div>
		
	<?php endforeach ?>
	</div>
	</section>
  <section>
		<div class="text wrap wide row no-padding">
		<h1 style="text-align: left;margin-bottom: 20px;padding-left:15px;padding-right:15px;"><?= $page->title2()->kirbytext() ?></h1>
		<div class="text" style="margin-bottom: 50px;padding-left:15px;padding-right:15px;">
       
			<h2><?= $page->intro2() ?></h2>
      </div>
      <div style="display: table;width: 100%;">
			<?php $kolumna1_2 = yaml($page->kolumna1_2())?>
			<div style="width: 50%;display: table-cell;vertical-align: middle;">
			<?php $zdjecie2 = yaml($page->zdjęcie2());?>
				<img src="<?= $page->image($zdjecie2)->url() ?>">
			</div>
			<div style="width: 50%;display: table-cell;vertical-align: middle;padding-right:15px;">
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-left: 50px;">
				<?= kirbytext($kolumna1_2['text1']) ?>
				<br>
				<?= kirbytext($kolumna1_2['text2']) ?>
				<br>
				<?= kirbytext($kolumna1_2['text3']) ?>
			</div>
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-left: 50px;">
			<?php $kolumna2_2 = yaml($page->kolumna2_2())?>
				<?= kirbytext($kolumna2_2['text1']) ?>
				<br>
				<?= kirbytext($kolumna2_2['text2']) ?>
				<br>
				<br>
				<?= kirbytext($kolumna2_2['text3']) ?>
			</div>
		  </div>
			</div>
		</div>
	</section>
    <section>
		<div class="text wrap wide row no-padding">
		<h1 style="text-align: left;margin-bottom: 20px;padding-left:15px;padding-right:15px;"><?= $page->title3()->kirbytext() ?></h1>
		<div class="text" style="margin-bottom: 70px;padding-left:15px;padding-right:15px;">
       
			<h2><?= $page->intro3()->kirbytext() ?></h2>
      </div>
      <div style="display: table;width: 100%;">
      <div style="width: 50%;display: table-cell;vertical-align: middle;padding-left:15px;">
			<?php $kolumna1_3 = yaml($page->kolumna1_3())?>
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-right: 50px;">
				<?= kirbytext($kolumna1_3['text1']) ?>
				<br>
				<br>
				<?= kirbytext($kolumna1_3['text2']) ?>
			</div>
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-right: 50px;">
			<?php $kolumna2_3 = yaml($page->kolumna2_3())?>
				<?= kirbytext($kolumna2_3['text1']) ?>
				<br>
				<br>
				<br>
				<?= kirbytext($kolumna2_3['text2']) ?>
			</div>
			</div>
			<div style="width: 50%;display: table-cell;vertical-align: middle;">
			<?php $zdjecie3 = yaml($page->zdjęcie3());?>
				<img src="<?= $page->image($zdjecie3)->url() ?>">
			</div>
		  
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