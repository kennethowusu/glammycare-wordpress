module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    //=============configuring sass================//
    sass: {
      dist: {
        files: {
          'css/style.css': 'scss/style.scss'
        }
      }
    },

    //======================configuring autoprefixer===================//
    autoprefixer:{
        options:{
            // We need to `freeze` browsers versions for testing purposes.
            browsers: ['opera 12', 'ff 15', 'chrome 25']
        },

         style: {
          src: 'css/style.css',
          dest: 'css/style.css'
        }
    },

    //=========================configuring watch=================//
    watch: {
       options:{
         livereload:false
       },
       sass: {
         files: ['scss/**/*'],
         tasks: ['sass','autoprefixer']
       }
    },

    //=================================configuring uglify================//

      uglify: {
        options: {
          mangle: false
        },
        my_target: {
          files: {
            'css/style.css': ['css/style.css']
          }
        }
      }



  });


  //================ Load grunt plugins=========================//
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');


  //=============registering tasks=============//
  grunt.registerTask('default', 'watch');
  grunt.registerTask('uglify', ['uglify']);
};
