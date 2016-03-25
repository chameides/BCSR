module.exports = (grunt) ->
  grunt.initConfig
    pkg: grunt.file.readJSON('package.json')


    sass:
      dist:
        options:
          outputStyle: 'compressed'
          ### 
          if testing, remove comments for viewing CSS as nested 
          outputStyle: 'nested'
          ###
        files:
          '_css/app.css': '_css/app.scss'
          '_css/iframe-compiled.css': '_css/iframe.scss'

    concat:   
      dist: 
        src: [
          '_resources/js/forms/source/jquery.validate.min.js',
          '_resources/js/forms/source/additional-methods.min.js',
          '_resources/js/forms/source/rfi-custom.js',
          ]
        dest: 
          '_resources/js/forms/rfi-combine-grunt.js'
      

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




    watch:
      styles:
        files: ['_css/**/*.scss']
        tasks: ['sass', 'autoprefixer']
        options:
          spawn: false
      grunticon:
        files: ['_images/_grunticon/*.svg', '_images/_grunticon/*.png']
        tasks: ['svgmin:bcsrIcons', 'grunticon:bcsrIcons']
        options:
          spawn: false

  require('load-grunt-tasks')(grunt)


  grunt.registerTask('default', ['sass', 'concat', 'svgmin:bcsrIcons', 'grunticon:bcsrIcons'])