<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap wide">
      <div class="intro text" style="text-align: left;padding-left: 15px;padding-right: 15px;">
        <h1 style="text-align: left;margin-bottom: 30px;"><?= $page->title()->html() ?></h1>
		    <h2 style="margin-bottom: 30px;"><?= $page->intro() ?></h2>
        <?= $page->image(['slider1.jpg']) ?>
      </div>
    </header>

    <section style="padding-top: 0;">
    <div class="text wrap wide row no-padding">
		<div style="display: table;width: 100%;">
		<div style="width: 50%;display: table-cell;vertical-align: middle;padding-left: 15px;">
      <?php $program = yaml($page->program())?>
      <div style="width: 33.33333333%;display: table-cell;vertical-align: top;padding-right: 50px;">
        <?= kirbytext($program['item1']) ?>
        <?= kirbytext($program['item2']) ?>
        <?= kirbytext($program['item3']) ?>
        <?= kirbytext($program['item4']) ?>
      </div>
        <div style="width: 33.33333333%;display: table-cell;vertical-align: top;padding-right: 50px;">
        <?= kirbytext($program['item5']) ?>
        <?= kirbytext($program['item6']) ?>
        <?= kirbytext($program['item7']) ?>
        <?= kirbytext($program['item8']) ?>
      </div>
        <div style="width: 33.33333333%;display: table-cell;vertical-align: top;padding-right: 50px;">
        <?= kirbytext($program['item9']) ?>
        <?= kirbytext($program['item10']) ?>
        <?= kirbytext($program['item11']) ?>
        <?= kirbytext($program['item12']) ?>
        <?= kirbytext($program['item13']) ?>
      </div>
      </div>
			</div>
		</div>
		</div>
    </section>

  </main>

<?php snippet('footer') ?>
