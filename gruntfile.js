module.exports = function(grunt) {

  // configure tasks
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    /*
    uglify: {
      build: {
        src:  'src/js/*.js',
        dest: 'js/main.min.js'
      },
      dev: {
        options: {
          beautify: true,
          mangle: false,
          compress: false,
          preserveComments: 'all'
        },
        src:  'src/js/*.js',
        dest: 'js/main.min.js'
      }
    },
    */
    sass: {
      dev: {
        options: {
          outputStyle: 'expanded'
        },
        files: {
          'style.css' : 'src/scss/style.scss'
        }
      },
      build: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'style.css' : 'src/scss/style.scss'
        }
      }
    },
    watch: {
      /*js: {
        files: ['src/js/*.js'],
        tasks: ['uglify:dev']
      },*/
      css: {
        files: ['src/scss/**/*.scss'],
        tasks: ['sass:dev']
      }
    }
  });

  // load the plugins
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');

  // register tasks
  //grunt.registerTask('default', ['uglify:dev', 'sass:dev']);
  //grunt.registerTask('build',   ['uglify:build', 'sass:build']);
  grunt.registerTask('default', ['sass:dev']);
  grunt.registerTask('build',   ['sass:build']);

};