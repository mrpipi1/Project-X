<?php if($i == $current_page): ?>
  <span class="current">Seite <?php echo $i ?></span>
<?php else: ?>
  <a href="?<?php echo http_build_query(array_merge($_GET, array('site' => $i))); ?>">Seite <?php echo $i ?></a>
<?php endif; ?>
