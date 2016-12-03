module.exports = function (grunt) {
    grunt.initConfig({
	    autoprefixer: {
		dist: {
		    files: {
			       'server/css/general.css': 'raw_css/desktop/general.css',
			       'server/css/slides.css': 'raw_css/desktop/slides.css',
			       'server/mobile/css/slides.css': 'raw_css/mobile/slides.css',
			       'server/mobile/css/slides.css': 'raw_css/mobile/slides.css',
             'fullpageTest/testCSS.css' : 'raw_css/testCSS.css'
		    }
		}
	    },
	    watch: {
		options:{
		    livereload:true,
		},
		styles: {
		    files: ['raw_css/desktop/general.css',
			    'raw_css/desktop/slides.css',
			    'raw_css/mobile/general.css',
			    'raw_css/mobile/slides.css',
			    'server/index.html',
          'server/mobile/index.html',
          'raw_css/testCSS.css'
        ],
		    tasks: ['autoprefixer']
		}
	    }
	});
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');
};
