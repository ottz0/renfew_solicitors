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
      //js: {
        //files: ['js/*.js'],
        //tasks: ['concat:development'],
      //},
      html: {
        files: ['builds/development/*.html'],
      }
    },




  });

  // Load the tasks.
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-livereload');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-concat');

  // Default task(s).
  grunt.registerTask('server', ['connect','watch']);

};