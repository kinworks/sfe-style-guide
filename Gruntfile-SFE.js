//////////////////////////////////////////

//////////////////////////////////////////

//////////////////////////////////////////

//////////////////////////////////////////

/////////////    WARNING

//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////

// I've commented out some sections of this gruntfile to run compilation faster for MIE. To compile the whole Styleguide, you'll need to uncomment the sections marked with 
// UNCOMMENT_TO_RUN

module.exports = function(grunt) {


  // now that we've loaded the package.json and the node_modules we set the base path
  // for the actual execution of the tasks
  //grunt.file.setBase('./')

  grunt.loadNpmTasks('grunt-grunticon');
  grunt.loadNpmTasks('grunt-svgmin');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-sass-globbing');
  grunt.loadNpmTasks('grunt-contrib-watch');


  // Project configuration.
  grunt.initConfig({
    
    sass: {
        options: {
            sourceMap: true
        },
        // UNCOMMENT_TO_RUN
        /*
        compilesos: {
            files: [{
                expand: true,
                cwd: 'html/sos/css/sass',
                src: ['*.scss'],
                dest: 'html/sos/css/output',
                ext: '.css'
            }]
        },
        patternssos: {
            files: [{
                expand: true,
                cwd: 'html/sos/css/sass/patterns',
                src: ['*.scss'],
                dest: 'html/sos/css/output/patterns',
                ext: '.css'
            }]
        },
        compiless: {
            files: [{
                expand: true,
                cwd: 'html/ss/css/sass',
                src: ['*.scss'],
                dest: 'html/ss/css/output',
                ext: '.css'
            }]
        },
        patternsss: {
            files: [{
                expand: true,
                cwd: 'html/ss/css/sass/patterns',
                src: ['*.scss'],
                dest: 'html/ss/css/output/patterns',
                ext: '.css'
            }]
        },
        
        compilemie: {
            files: [{
                expand: true,
                cwd: 'html/mie/css/sass',
                src: ['*.scss'],
                dest: 'html/mie/css/output',
                ext: '.css'
            }]
        },
        patternsmie: {
            files: [{
                expand: true,
                cwd: 'html/mie/css/sass/patterns',
                src: ['*.scss'],
                dest: 'html/mie/css/output/patterns',
                ext: '.css'
            }]
        }
        
        */
        
        compilesfe: {
            files: [{
                expand: true,
                cwd: 'html/sfe/interface/css/sass',
                src: ['*.scss'],
                dest: 'html/sfe/interface/css/output',
                ext: '.css'
            }]
        },
        patternssfe: {
            files: [{
                expand: true,
                cwd: 'html/sfe/interface/css/sass/patterns',
                src: ['*.scss'],
                dest: 'html/sfe/interface/css/output/patterns',
                ext: '.css'
            }]
        }

				/*

				compilelos: {
            files: [{
                expand: true,
                cwd: 'html/los/css/sass',
                src: ['*.scss'],
                dest: 'html/los/css/output',
                ext: '.css'
            }]
        },
        patternslos: {
            files: [{
                expand: true,
                cwd: 'html/los/css/sass/patterns',
                src: ['*.scss'],
                dest: 'html/los/css/output/patterns',
                ext: '.css'
            }]
        } */

    },
    
    /* Sass Globbing preamble:
      
      Sass_globbing creates an 'import map' file (using the first file argument for destination and desired filename) that contains a list of @imports for the files it found at the location in the second argument.
      
      The 'import map' can then be picked up by the regular Sass task, and should be included in global.css or similar master imports file.
      
      The watch task for sass globbing therefore will notice when a new file is added to your globbing location, and update the import map, which will trigger the watch task for sass proper to re-compile. */
    
    sass_globbing: {
      patterns: {
        files: {
          // UNCOMMENT_TO_RUN
         /*
          'html/sos/css/sass/_Patterns-ImportMap.scss': 'html/sos/css/sass/patterns/*.scss',
          'html/ss/css/sass/_Patterns-ImportMap.scss': 'html/ss/css/sass/patterns/*.scss',
          
          'html/mie/css/sass/_Patterns-ImportMap.scss': 'html/mie/css/sass/patterns/*.scss',
          */
          
          'html/sfe/interface/css/sass/_Patterns-ImportMap.scss': 'html/sfe/interface/css/sass/patterns/*.scss',
          
          /*
          'html/los/css/sass/_Patterns-ImportMap.scss': 'html/los/css/sass/patterns/*.scss', */
        },
        options: {
          useSingleQuotes: false,
          signature: '// This import map was automatically generated by grunt-sass-globbing. DO NOT EDIT THIS BY HAND - YOUR CHANGES WILL BE OVERWRITTEN.'
        }
      }
    },
    
  grunticon: 
  	{
	  // UNCOMMENT_TO_RUN
        /*
	  sosicons: 
	  		{
		    files: 
		    		[{
              // SoS config
              expand: true,
              cwd: 'html/sos/assets-icons/src',
              src: ['*.svg', '*.png'],
              dest: "html/sos/assets-icons/output"
	          
            }],
			options: 
						{
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
        },   
   
   ssicons: 
   			{
		    files: 
		    		[{
              // SS config
              expand: true,
              cwd: 'html/ss/assets-icons/src',
              src: ['*.svg', '*.png'],
              dest: "html/ss/assets-icons/output"
	          }],
				
			options: 
						{
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
			 	},      
				
		mieicons: 
   			{
		    files: 
		    		[{
              // MIE config
              expand: true,
              cwd: 'html/mie/assets-icons/src',
              src: ['*.svg', '*.png'],
              dest: "html/mie/assets-icons/output"
	          }],
				
			options: 
						{
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
			 	
			 	*/
			 	
			sfeicons: 
   			{
		    files: 
		    		[{
              // MIE config
              expand: true,
              cwd: 'html/sfe/interface/assets-icons/src',
              src: ['*.svg', '*.png'],
              dest: "html/sfe/interface/assets-icons/output"
	          }],
				
			options: 
						{
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
 
		
			 	/*
		
			 	losicons: 
   			{
		    files: 
		    		[{
              // MIE config
              expand: true,
              cwd: 'html/los/assets-icons/src',
              src: ['*.svg', '*.png'],
              dest: "html/los/assets-icons/output"
	          }], 
				
			options: 
						{
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
			 	*/
		
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
          files: 
            [
            	// UNCOMMENT_TO_RUN
								/*
            	{
                expand: true,
                cwd: 'html/sos/assets-icons/raw',
                src: ['*.svg'],
                dest: "html/sos/assets-icons/src"
            	},
            	{
                expand: true,
                cwd: 'html/ss/assets-icons/raw',
                src: ['*.svg'],
                dest: "html/ss/assets-icons/src"
            	},
            	
            	{
                expand: true,
                cwd: 'html/mie/assets-icons/raw',
                src: ['*.svg'],
                dest: "html/mie/assets-icons/src"
            	}
            	
            	*/
            	
            	{
                expand: true,
                cwd: 'html/sfe/assets-icons/raw',
                src: ['*.svg'],
                dest: "html/sfe/assets-icons/src"
            	}
            	
            	/*
            	
            	{
                expand: true,
                cwd: 'html/los/assets-icons/raw',
                src: ['*.svg'],
                dest: "html/los/assets-icons/src"
            	}
            	*/
            ]
        }
    },



    watch: {
      sass: {
        files: [// UNCOMMENT_TO_RUN
        /* 'html/sos/css/sass/*.scss',
        			 'html/ss/css/sass/*.scss',
        			 'html/mie/css/sass/*.scss', */
        			 'html/sfe/interface/css/sass/*.scss', /*
        			 'html/los/css/sass/*.scss'], */
        			 ],
        tasks: ['sass']
      },
      sass_globbing: {
        files: [// UNCOMMENT_TO_RUN
        /* 'html/sos/css/sass/patterns/*.scss',
        			 'html/ss/css/sass/patterns/*.scss',
        			 'html/mie/css/sass/patterns/*.scss',*/
	        			'html/sfe/interface/css/sass/patterns/*.scss',/*
        			 'html/los/css/sass/patterns/*.scss'],*/
        			 ],
        tasks: ['sass_globbing']
      },
      svgmin: {
        files: [// UNCOMMENT_TO_RUN
        /*'html/sos/assets-icons/raw/*.svg',
        			 'html/ss/assets-icons/raw/*.svg',
        			 'html/mie/assets-icons/raw/*.svg',*/
	        		 'html/sfe/interface/assets-icons/raw/*.svg',/*
        			 'html/los/assets-icons/raw/*.svg'],*/
        			 ],
        tasks: ['svgmin']
      },
      grunticon: {
        files: [// UNCOMMENT_TO_RUN
        /*'html/sos/assets-icons/src/*.svg',
        			 'html/ss/assets-icons/src/*.svg',
        			 'html/mie/assets-icons/src/*.svg',*/
        			 'html/sfe/interface/assets-icons/src/*.svg',/* 
	        		 'html/los/assets-icons/src/*.svg'],*/
        			 ],
        tasks: ['grunticon']
      },
    },

  });


  // Default task.
  grunt.registerTask('default', ['svgmin', 'grunticon', 'sass', 'sass_globbing' ]);

};
