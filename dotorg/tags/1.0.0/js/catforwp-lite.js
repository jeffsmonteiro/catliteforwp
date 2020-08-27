'use strict';
(function($){
  $(function(){
    if( $('#cat_custom_style').length ) {
      var editorSettings = wp.codeEditor.defaultSettings ? _.clone( wp.codeEditor.defaultSettings ) : {};
      editorSettings.codemirror = _.extend(
          {},
          editorSettings.codemirror,
          {
              indentUnit: 2,
              tabSize: 2,
              mode: 'css',
          }
      );
      var editor = wp.codeEditor.initialize( $('#cat_custom_style'), editorSettings );
    }
  });
 })(jQuery);