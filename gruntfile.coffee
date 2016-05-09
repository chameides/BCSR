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
          dest: '_resources/css/icons'
        }]
        options:
          loadersnippet: '../../../_js/grunticon.loader.js'
          pngfolder: '../../../_images/why-simons-rock/at-a-glance/png-fallback-icons'
          template: '_images/_grunticon/css.hbs'
          enhanceSVG: true
          customselectors:
            "*": [".icon-$1--before:before", ".icon-$1--after:after"]
          colors:
            white: '#ffffff'
            black: '#000000'

    sass:
      dist:
        options:
          style: 'compressed'
        files:
          '_css/app.css': '_css/app.scss'


    watch:
      styles:
        files: ['_css/**/*.scss']
        tasks: ['sass']
        options:
          spawn: false
      grunticon:
        files: ['_images/_grunticon/*.svg', '_images/_grunticon/*.png']
        tasks: ['svgmin:bcsrIcons', 'grunticon:bcsrIcons']
        options:
          spawn: false

  require('load-grunt-tasks')(grunt)

  grunt.registerTask('default', ['svgmin:bcsrIcons', 'grunticon:bcsrIcons', 'sass'])
