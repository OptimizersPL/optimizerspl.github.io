<?php snippet('header')?>
  <main class="main" role="main">
    <header class="wrap wide">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text" style="width:60%;margin: 0 auto;">
		  <h2 style="text-align: center;margin-top: 30px;"><?= $page->text()->kirbytext() ?></h2>
      </div>
    </header>
    <form id="form-rezerwacje" method="post" class="contact-form">

    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Imię i nazwisko" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" style="width:49%;display: inline-block;" name="email" placeholder="Służbowy email" required>
						<input type="text" class="form-control" id="mobile" style="width:49%;display: inline-block;margin-left: 2%;" name="mobile" placeholder="Telefon" required>
					</div>
                    <div class="form-group">
                    	<input class="form-control" type="text" id="addText" name="addText" placeholder="Coś jeszcze? Catering, dojazd, aktywności?">
                    </div>


      <input type="submit" name="submit" class="btn" value="Rezerwuj">

    </form>

  </main>
