<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  <section id="section-content">
    <div class="container-12">
      <div class="grid-10 prefix-2">
        <p></p>
        <h1>Seite nicht gefunden :(</h1>
      </div>
    </div>
  </section>
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>
