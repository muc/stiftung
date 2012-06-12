<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="<?php print $class; ?>"<?php print $attributes; ?>>
  <?php foreach ($rows as $row_number => $columns): ?>
    <div class="<?php print $row_classes[$row_number]; ?>">
      <?php foreach ($columns as $column_number => $item): ?>
        <?php
          $grid_class = $column_number == 0 ? ' alpha' : ($column_number == ($options['columns'] - 1) ? ' omega' : '');
        ?>
        <div class="grid-2<?php print $grid_class;?> <?php print $column_classes[$row_number][$column_number]; ?>">
          <?php print $item; ?>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>