module.exports = (grunt) ->
  grunt.initConfig
    pkg: grunt.file.readJSON('package.json')

    svgmin:
      bcsrIcons:
        files: [{
          expand: true
          cwd: '_images/_grunticon'
          src: ['**/*.svg']
          dest: '_images/_grunticon'
        }]

    grunticon:
      bcsrIcons:
        files: [{
          expand: true
          cwd: '_images/_grunticon'
          src: ['*.svg', '*.png']
          dest: '_css'
        }]
        options:
          loadersnippet: '../_js/grunticon.loader.js'
          pngfolder: '../_images/png-fallback-icons'
          template: '_images/_grunticon/css.hbs'
          enhanceSVG: true
          customselectors:
            "*": [".icon-$1--before:before", ".icon-$1--after:after"]
          colors:
            white: '#ffffff'
            black: '#000000'

  require('load-grunt-tasks')(grunt, pattern: 'grunt-*')

  grunt.registerTask('default', ['svgmin:bcsrIcons', 'grunticon:bcsrIcons'])
