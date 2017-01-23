(function() {
  tinymce.create('tinymce.plugins.StonyRayHintBox', {
      init : function(ed, url) {
          ed.addButton('button_hintbox', {
              title : 'HintBox',
              cmd : 'hintbox',
              icon : 'wp_more',
          });

          ed.addCommand('hintbox', function() {
              var selected_text = ed.selection.getContent();
              var return_text = '';
              return_text = '<div class="hint-box">' + selected_text + '</div>';
              ed.execCommand('mceInsertContent', 0, return_text);
          });
      },
      createControl : function(n, cm) {
        return null;
      },
  });
  // Register plugin
  tinymce.PluginManager.add( 'stonyray_hintbox', tinymce.plugins.StonyRayHintBox );
})();
