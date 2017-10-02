<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->label()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
