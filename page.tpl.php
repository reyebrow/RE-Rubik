<div id="toolbar">
  <div class="toolbar-drawer clearfix">
    <div class="toolbar-shortcuts">
      <?php print drupal_render(shortcut_renderable_links());?>
    </div>
    <a href="/admin/config/user-interface/shortcut/shortcut-set-1" id="edit-shortcuts">Edit shortcuts</a>
  </div>
</div>  
<?php 
$path_to_module = drupal_get_path('module', 'toolbar');
drupal_add_css($path_to_module . '/toolbar.css', 'file');
$path_to_theme = drupal_get_path('theme', 'rubik');
include_once($path_to_theme . '/page.tpl.php');
?>