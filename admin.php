<?php

$app->on('admin.init', function () {
  // add custom theme
  $this->helper('admin')->addAssets('cockpitthememinimal:assets/styles.css');
});
