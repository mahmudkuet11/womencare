(function() {
	tinymce.create('tinymce.plugins.tgtinyMCE', {
		init : function(ed, url) {
		 ed.addCommand('shortcodeGenerator', function() {
		 	
		 		tb_show("Official Shortcodes", url + '/shortcode_generator/shortcode-generator.php?&width=630&height=600');

				
		 });
			//Add button
			ed.addButton('scgenerator', {	title : 'Official Shortcodes', cmd : 'shortcodeGenerator', image : url + '/shortcode_generator/icons/shortcode-generator.png' });
        },
        createControl : function(n, cm) {
			  return null;
        },
		  getInfo : function() {
			return {
				longname : 'Official TinyMCE',
				author : 'Tohid Golkar',
				authorurl : 'http://tohidgolkar.com',
				infourl : 'http://tohidgolkar.com',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
    });
    tinymce.PluginManager.add('tg_buttons', tinymce.plugins.tgtinyMCE);
})();
