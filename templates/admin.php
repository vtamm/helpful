<div class="helpful-admin-header">

  <div class="helpful-admin-logo">
    <h1>Helpful</h1>
  </div>
  
  <?php $tabs = apply_filters('helpful_admin_tabs', []); ?>

  <nav class="helpful-admin-tabs">
    <?php foreach( $tabs as $tab ): ?>
    <a href="<?php echo $tab['href']; ?>" class="helpful-admin-tab <?php echo $tab['class']; ?>">
      <?php echo $tab['name']; ?>
    </a>
    <?php endforeach; ?>
  </nav>

  <select class="helpful-admin-nav linked">
    <?php foreach( $tabs as $tab ): ?>
    <option value="<?php echo $tab['href']; ?>"<?php echo $tab['attr']; ?>><?php echo $tab['name']; ?></a>
    <?php endforeach; ?>
  </select>

</div><!-- .helpful-admin-header -->

<div class="helpful-admin-content">

  <div class="helpful-admin-container">

    <?php do_action('helpful_notices'); ?>
    
    <?php do_action('helpful_tabs_content'); ?>

  </div><!-- .helpful-admin-container -->
</div><!-- .helpful-admin-content -->