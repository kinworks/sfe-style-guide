module.exports = function(grunt) {


  // now that we've loaded the package.json and the node_modules we set the base path
  // for the actual execution of the tasks
  //grunt.file.setBase('./')

  grunt.loadNpmTasks('grunt-grunticon');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-svgmin');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-remove');
  grunt.loadNpmTasks('grunt-contrib-watch');
  //grunt.loadNpmTasks('grunt-simple-watch');
      //"grunt-simple-watch": "~0.1.2", (for package.json)


  // Project configuration.
  grunt.initConfig({
    
    sass: {
        options: {
            sourceMap: true
        },
        dist: {
            files: [{
                expand: true,
                cwd: 'html/sites/all/themes/sos/css/sass',
                src: ['**/*.scss'],
                dest: 'html/sites/all/themes/sos/css/output',
                ext: '.css'
            }]
        }
    },
    
    grunticon: {
	  icons: {
	    files: [{
              // required config
              expand: true,
              cwd: 'html/sites/all/themes/sos/icons/src',
              src: ['*.svg', '*.png'],
              dest: "html/sites/all/themes/sos/icons/output"
             }],

    options: {

      	    // optional config properties

     	      // CSS filenames
      	      datasvgcss: "icons.data.svg.css",
      	      datapngcss: "icons.data.png.css",
      	      urlpngcss: "icons.fallback.css",

      	      // preview HTML filename
      	      previewhtml: "preview.html",

      	      // Unicon loader code snippet filename
              loadersnippet: "unicon.loaderjavascript.txt",

              // folder name (within dest) for png output
              pngfolder: "./png",

              // prefix for CSS classnames
              cssprefix: ".icon-",

              // This allows root-relative referencing of the CSS. If you don't want a prefix path, set to to ""
              cssbasepath: ""
           }
        }
      },
    
    svgmin: {
        options: {
            plugins: [
                {
                    removeViewBox: false
                }, {
                    removeUselessStrokeAndFill: false
                }
            ]
        },
        dist: {
            files: [{
                expand: true,
                cwd: 'html/sites/all/themes/sos/icons/raw/',
                src: ['*.svg'],
                dest: "html/sites/all/themes/sos/icons/src/"
            }]
        }
    },

    remove: {
      options: {
        trace: true
      },
      fileList: ['html/sites/all/themes/sos/js/concatenated.js'],
      //dirList: ['path_to_dir_1', 'path_to_dir2/']
    },
    
    concat: {
      options: {
        separator: ';\n'
      },
      build: {
        src: ['html/sites/all/themes/sos/js/source/*.js'],
        dest: 'html/sites/all/themes/sos/js/concatenated.js',
      }
    },
    uglify: {
      dist: {
        files: {
          'html/sites/all/themes/sos/js/site.min.js': ['html/sites/all/themes/sos/js/concatenated.js']
        }
      }
    },

    watch: {
      sass: {
        files: 'html/sites/all/themes/sos/css/sass/*.scss',
        tasks: ['sass'],
      },
      svgmin: {
        files: 'html/sites/all/themes/sos/icons/raw/*',
        tasks: ['svgmin'],
      },
      grunticon: {
        files: 'html/sites/all/themes/sos/icons/src/*',
        tasks: ['grunticon'],
      },
      jssource: {
        files: 'html/sites/all/themes/sos/js/source/*.js',
        tasks: ['concat'],
      },
      jsoutput: {
        files: 'html/sites/all/themes/sos/js/concatenated.js',
        tasks: ['uglify'],
      }
    },

  });


  // Default task.
  grunt.registerTask('default', ['svgmin', 'grunticon','concat', 'uglify', 'sass' ]);

};
