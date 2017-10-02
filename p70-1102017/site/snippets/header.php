<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
   <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <?= css('assets/css/index.css') ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCupafFSqqO6TfTRb8lzbp4Lbm6sDhUkLM"></script>
</head>
<body>

  <header class="header wrap wide" role="banner">


      <div class="branding column">
        <a href="<?= url() ?>" rel="home"><img src="content/<?= $site->Logo()?>" style="width:9em;"></a>
      </div>
<?php if($page->label() != 'Rezerwacje'): ?>
      <?php snippet('menu') ?>
      <?php endif ?>
		<div class="column" style="float: right;width: auto;line-height: 3.5rem;">
			<b style="float: left;"><?php echo $site->telefon()->html(); ?></b>
			<?php if($page->label() != 'Rezerwacje'): ?>
			<a href="rezerwacje" style="margin-left: 35px;"><div class="btn" style="font-size:16px;margin-top: -2px;">Rezerwuj</div></a>
			<?php endif ?>
		</div>


  </header>
