module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
   
    //Compile and build less source maps
    less: {
        development: {
            options: {
                strictMath: true,
                      sourceMap: true,
                      outputSourceFiles: true,
                      sourceMapURL: 'renfre-main.css.map',
                      sourceMapFilename: 'builds/development/css/renfrew-main.css.map'
            },
            files: {
                "builds/development/css/renfrew-main.css": "less/renfrew-main.less"
            }
        },
    },

    concat: {
      development: {
        src: ['js/*.js', 'js/vendor/*.js'],
        dest: 'builds/development/js/renfrew-main.js',
      },
    },

    connect: {
      options: {
        port: 8000,
        livereload: 35729,
        hostname: 'localhost',
        base: '.'
      },
      livereload: {
        options: {
          open: true
        }
      }
    },

    watch: {
      options: {
        livereload: true,
      },
      less: {
        files: ['less/*.less','less/components/*.less'],
        tasks: ['less'],
      },
      css: {
        files: ['css/*.css'],
        tasks: ['less'],
      },
      html: {
        files: ['builds/development/*.html'],
      }
    },

    copy: {
      distribution: {
        files: [
          {
            expand: true, 
            cwd: 'builds/development',
            src: 'fonts/**', 
            dest: 'builds/distribution/',
          },
          {
            expand: true, 
            cwd: 'builds/development',
            src: 'images/**', 
            dest: 'builds/distribution/',
          },
          {
            expand: true, 
            cwd: 'builds/development',
            src: 'sendmail/**', 
            dest: 'builds/distribution/',
          },
          {
            expand: true, 
            cwd: 'builds/development/js',
            src: 'vendor/**', 
            dest: 'builds/distribution/js',
          },
          {
            expand: true,
            cwd: 'builds/development',
            src: 'index.php', 
            dest: 'builds/distribution'
          },
          {
            expand: true,
            cwd: 'builds/development',
            src: 'verify.php', 
            dest: 'builds/distribution'
          },
          {
            expand: true,
            cwd: 'builds/development',
            src: 'conveyancing.php', 
            dest: 'builds/distribution'
          },
        ],
      }
    },

    processhtml: {
        build: {
            files: {
                'builds/distribution/index.php' : ['builds/distribution/index.php'],
                'builds/distribution/conveyancing.php' : ['builds/distribution/conveyancing.php'],
                'builds/distribution/verify.php' : ['builds/distribution/verify.php'],
            }
        }
    },

    clean: {
      build: {
        src: [ 'builds/distribution/*' ]
      },
    },

    cssmin: {
      distribution: {
        files: [{
          expand: true,
          cwd: 'builds/development/css',
          src: ['*.css', '!*.min.css'],
          dest: 'builds/distribution/css',
          ext: '.min.css'
        }]
      }
    },

    uglify: {
      distribution: {
        files: {
          'builds/distribution/js/renfrew-main.min.js': ['builds/development/js/renfrew-main.js']
        }
      }
    }

  });

  // Load the tasks.
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-livereload');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-processhtml');
  grunt.loadNpmTasks('grunt-contrib-uglify');


  // Default task for development.
  grunt.registerTask('server', ['connect','watch']);

  // Distribution packaging.
  grunt.registerTask('dist', ['clean','uglify','cssmin','copy','processhtml']);

};