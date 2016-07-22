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
          '_resources/js/forms/source/rfi-combine-grunt.js'

    uglify: 
      static_mappings: {
        files: [
          {src: '_resources/js/forms/source/rfi-combine-grunt.js', dest: '_resources/js/forms/rfi-combine-min.js'},
          {src: '_resources/js/secondary-nav.js', dest: '_resources/js/secondary-nav-min.js'},
        ],
      }
       
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

    php:
      dist:
        options:
          hostname: '127.0.0.1',
          port: 9000,
          base: '/Users/mchameides/Documents/web/BCSR'
          keepalive: false,
          open: false

    browserSync:
      dist: 
        bsFiles: 
          src: ['_css/**/*.css', '*.php']
      options: 
        proxy: '<%= php.dist.options.hostname %>:<%= php.dist.options.port %>',
        watchTask: true,
        notify: true,
        open: true,
        logLevel: 'silent',
        ghostMode: 
            clicks: true,
            scroll: true,
            links: true,
            forms: true

    watch:
      styles:
        files: ['_css/**/*.scss']
        tasks: ['sass']
        options:
          spawn: true

      grunticon:
        files: ['_images/_grunticon/*.svg', '_images/_grunticon/*.png']
        tasks: ['svgmin:bcsrIcons', 'grunticon:bcsrIcons']
        options:
          spawn: false

  require('load-grunt-tasks')(grunt)


  grunt.registerTask('default', ['sass', 'concat', 'uglify', 'svgmin:bcsrIcons', 'grunticon:bcsrIcons', 'php'])

  grunt.registerTask('serve', ['php:dist', 'browserSync:dist', 'watch'])

