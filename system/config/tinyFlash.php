<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */


/**
 * This is the tinyMCE (rich text editor) configuration file for flash content.
 * Please visit http://tinymce.moxiecode.com for more information.
 */
if ($GLOBALS['TL_CONFIG']['useRTE']):

?>
<script>window.tinymce || document.write('<script src="<?php echo TL_ASSETS_URL; ?>assets/tinymce4/tinymce.gzip.js">\x3C/script>')</script>
<script>
setTimeout(function() {
  window.tinymce && tinymce.init({
    skin: 'contao',
    selector: '#<?php echo $selector; ?>',
    language: '<?php echo Backend::getTinyMceLanguage(); ?>',
    element_format: 'html',
    forced_root_block: false,
    document_base_url: '<?php echo Environment::get('base'); ?>',
    entities: '160,nbsp,60,lt,62,gt,173,shy',
    setup: function(editor) {
      editor.getElement().removeAttribute('required');
    },
    init_instance_callback: function(editor) {
      if (document.activeElement && document.activeElement.id && document.activeElement.id == editor.id) {
        editor.editorManager.get(editor.id).focus();
      }
      editor.on('focus', function() { Backend.getScrollOffset(); });
    },
    file_browser_callback: function(field_name, url, type, win) {
      Backend.openModalBrowser(field_name, url, type, win);
    },
    templates: [
      <?php echo Backend::getTinyTemplates(); ?>
    ],
    plugins: 'autosave charmap code fullscreen image legacyoutput link lists paste searchreplace tabfocus template visualblocks',
    browser_spellcheck: true,
    tabfocus_elements: ':prev,:next',
    content_css: '<?php echo TL_PATH; ?>/system/themes/tinymce.css',
    extended_valid_elements: 'b/strong,i/em',
    menubar: 'file edit insert view format table',
    toolbar: 'link unlink | image | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | undo redo | code'
  });
}, 0);
</script>
<?php endif; ?>
