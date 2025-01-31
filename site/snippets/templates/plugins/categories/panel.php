<?php snippet('templates/plugins/section', [
  'icon'    => 'dashboard',
  'id'      => 'extensions',
  'title'   => 'Views',
  'layout'  => 'hero',
  'columns' => 2,
  'plugins' => $plugins->filter('subcategory', 'view')->pluck('id')
]) ?>

<?php snippet('templates/plugins/section', [
  'id'      => 'blocks',
  'icon'    => 'dashboard',
  'title'   => 'Blocks',
  'layout'  => 'cards',
  'plugins' => $plugins->filter('subcategory', 'block')->pluck('id')
]) ?>

<?php snippet('templates/plugins/section', [
  'id'      => 'sections',
  'icon'    => 'dashboard',
  'title'   => 'Sections',
  'layout'  => 'cards',
  'plugins' => $plugins->filter('subcategory', 'section')->pluck('id')
]) ?>

<?php snippet('templates/plugins/section', [
  'id'      => 'enhancements',
  'icon'    => 'dashboard',
  'title'   => 'Enhancements',
  'layout'  => 'cards',
  'columns' => 2,
  'plugins' => $plugins->filter('subcategory', '')->pluck('id')
]) ?>
