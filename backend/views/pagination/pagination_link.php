
<?php if($i == $current_page): ?>
  <span class="current pagination"><?php echo $i ?></span>
<?php else: ?>
  <a href="?<?php echo http_build_query(array_merge($_GET, array('site' => $i))); ?>" class="pagination"><?php echo $i ?></a>
<?php endif; ?>
