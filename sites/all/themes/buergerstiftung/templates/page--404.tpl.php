<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  <section id="section-content">
	  
		<div class="container-12 clearfix">
		  <div class="grid-12 node">
		  
			<h1 class="heading-404">Seite nicht gefunden (Error 404)</h1>
			<p>Es scheint als wäre die Seite, die Sie zu erreichen versucht haben, nicht verfügbar. Das kann verschiedene Gründe haben:</p>
			
			<ul>
				<li>Die Seite wurde <strong>gelöscht</strong></li>
				<li>Die Seite wurde <strong>umbenannt</strong></li>
				<li>Der Link auf die Seite ist falsch oder Sie haben sich <strong>vertippt</strong></li>
			</ul>
			
			<p>Sie können nun folgendes tun:</p>
			<ul>
				<li>Überprüfen Sie die Adresse auf eventuelle Tippfehler</li>
				<li>Nutzen Sie unsere <strong>Suchfunktion</strong> (siehe oben Rechts)</li>
				<li>Gehen Sie auf unsere <strong>Startseite</strong> (Klick auf das Logo oben links) und starten Sie von Neuem</li>
			</ul>
					
		  </div>
		</div>
	
  </section>
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>
