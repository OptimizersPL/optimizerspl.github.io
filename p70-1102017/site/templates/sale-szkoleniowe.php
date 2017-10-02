<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap wide">

      <div class="intro text" style="text-align: left;padding-left: 15px;padding-right: 15px;">
       <h1 style="text-align: left;margin-bottom: 30px;"><?= $page->title()->html() ?></h1>
		  <h2><?= $page->intro() ?></h2>
      </div>
    </header>
    <section style="padding-top: 0;">
		<div class="text wrap wide row no-padding">
		<div style="display: table;width: 100%;">
		<div style="width: 50%;display: table-cell;vertical-align: middle;padding-left: 15px;">
			<?php $kolumna1 = yaml($page->kolumna1())?>
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-right: 50px;">

				<?= kirbytext($kolumna1['text1']) ?>
				<br><br>
				<?= kirbytext($kolumna1['text2']) ?>

			</div>
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-right: 50px;">
			<?php $kolumna2 = yaml($page->kolumna2())?>
				<?= kirbytext($kolumna2['text1']) ?>
				<br><br>
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
	<section>
		<div class="intro text wrap wide row">
			<h1 style="display: inline-block;margin-right: 2em;"><?= $page->Rezerwacja_text() ?></h1>
			<a href="rezerwacje"><div class="btn">Rezerwuj</div></a>
		</div>
	</section>
	<section>
	<?php $sale = yaml($page->Sale())?>
	<?php foreach($sale as $sala): ?>
	<div style="display: table;width: 100%;">
		<?php if($sala['Pozycja_zdjęcia']=='prawa'): ?>
		<div class="text wrap wide row no-padding" style="margin-bottom: 100px;">
			<div style="width: 58.33333333%;display: table-cell;vertical-align: middle;padding-right: 50px;">
				<img src="<?= $page->image($sala['Zdjęcie'])->url() ?>">
			</div>
			<div style="width: 41.66666667%;display: table-cell;vertical-align: middle;padding-right: 15px;">
				<h1 style="text-align: left;font-weight: inherit;margin-bottom: 40px;"><?= kirbytext($sala['Tytuł']) ?></h1>
				<p><?= $sala['Tekst'] ?></p>
			</div>
		</div>
		<?php else: ?>
		<div class="text wrap wide row no-padding"  style="margin-bottom: 100px;">
			<div style="width: 41.66666667%;display: table-cell;vertical-align: middle;padding-left: 15px;">
				<h1 style="text-align: left;font-weight: inherit;margin-bottom: 40px;"><?= kirbytext($sala['Tytuł']) ?></h1>
				<p><?= $sala['Tekst'] ?></p>
			</div>
			<div style="width: 58.33333333%;display: table-cell;vertical-align: middle;padding-left: 50px;">
				<img src="<?= $page->image($sala['Zdjęcie'])->url() ?>">
			</div>
		</div>
		<?php endif ?>
		</div>
	<?php endforeach ?>
	</section>
	<section>
		<div class="intro text wrap wide row " style="padding-left:15px;padding-right:15px;">
			<h1 style="margin-bottom: 50px;"><?= $page->Więcej_tytuł()->kirbytext() ?></h1>
			<?php $more = yaml($page->Więcej())?>
			<?php foreach($more as $kolumn): ?>
			<div class="col-sm-4" style="text-align: left">
				<h2><?= $kolumn['Tytuł'] ?></h2>
				<p style="margin-top: 25px;font-size: 16px;font-weight: normal;"><?= $kolumn['Text'] ?></p>
			</div>
			<?php endforeach ?>
	  	</div>
	</section>


	<section>
	<div class="text wrap wide row no-padding" style="margin-bottom: 70px;">
		<div class="intro text" style="text-align: left;padding-left:15px;padding-right:15px;">
       <h1 style="text-align: left;margin-bottom: 30px;"><?= $page->title2()->html() ?></h1>
		  <h2><?= $page->text2() ?></h2>
      </div>
	  </div>
		<div class="text wrap wide row no-padding">
		<div style="display: table;width: 100%;">
		<div style="width: 50%;display: table-cell;vertical-align: middle;padding-left:15px;">
			<?php $kolumna1_2 = yaml($page->kolumna1_2())?>
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-right: 50px;">
				<?= kirbytext($kolumna1_2['text1']) ?>
				<br>
				<br>
				<?= kirbytext($kolumna1_2['text2']) ?>
			</div>
			<div style="width: 25%;display: table-cell;vertical-align: top;padding-right: 50px;">
			<?php $kolumna2_2 = yaml($page->kolumna2_2())?>
				<?= kirbytext($kolumna2_2['text1']) ?>
				<br>
				<br>
				<br>
				<?= kirbytext($kolumna2_2['text2']) ?>
			</div>
			</div>
			<div style="width: 50%;display: table-cell;vertical-align: middle;">
			<?php $zdjecie2 = yaml($page->zdjęcie2());?>
				<img src="<?= $page->image($zdjecie2)->url() ?>">
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
