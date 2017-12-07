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
          '_css/app-cec.css': '_css/app-cec.scss'
          '_css/iframe-compiled.css': '_css/iframe.scss'
    concat:   
      radius: 
        src: [
          '_resources/js/forms/source/jquery.validate.min.js',
          '_resources/js/forms/source/additional-methods.min.js',
          '_resources/js/forms/source/rfi-custom.js',
          ]
        dest: 
          '_resources/js/forms/source/rfi-combine-grunt.js'
      app_bcsr:
        src: [
          '_js/_js-not-minified/app/app-part1.js',
          '_js/_js-not-minified/app/show-search-bcsr.js',
          '_js/_js-not-minified/app/mobilenav.js',
          '_js/_js-not-minified/app/app-part2.js',
          '_js/_js-not-minified/app/rockers.js',
          '_js/_js-not-minified/app/app-part3.js',
          ]
        dest: 
          '_js/_js-not-minified/app/app-bcsr-combined.js'
      app_cec:  
        src: [
          '_js/_js-not-minified/app/app-part1.js',
          '_js/_js-not-minified/app/show-search-cec.js',
          '_js/_js-not-minified/app/app-part2.js',
          '_js/_js-not-minified/app/app-part3.js',
          '_js/_js-not-minified/OU-link.js',
          ]
        dest: 
          '_js/_js-not-minified/app/app-cec-combined.js'
      bootstrap_cec:  
        src: [
          '_js/_js-not-minified/modernizr.custom.js',
          '_js/polyfills/tokenizer.js',
          '_js/polyfills/parser.js',
          '_js/polyfills/vminpoly.js',
          ]
        dest: 
          '_js/_js-not-minified/app-sync.js'
      polyfill:  
        src: [
          '_js/polyfills/tokenizer.js',
          '_js/polyfills/parser.js',
          '_js/polyfills/vminpoly.js',
          ]
        dest: 
          '_js/_js-not-minified/polyfill.js'
      index_bcsr:  
        src: [
          '_js/_js-not-minified/backgroundVideoControlsIndex.js',
          '_js/_js-not-minified/index1.js',
          '_js/_js-not-minified/index2-factoids.js',
          '_js/_js-not-minified/index3.js',
          '_js/_js-not-minified/index4-factoids.js',
          '_js/_js-not-minified/index5.js',
          '_js/_js-not-minified/index6-factoids.js',
          '_js/_js-not-minified/index7.js',
          ]
        dest: 
          '_js/_js-not-minified/index-concat.js'
      background_video:  
        src: [
          '_js/_js-not-minified/backgroundVideo.mod.js',
          '_js/_js-not-minified/backgroundVideoControls.js',
          ]
        dest: 
          '_js/_js-not-minified/backgroundVideoCombined.js'
      factoids:  
        src: [
          '_js/scrollmagic/jquery.scrollmagic.js',
          '_js/_js-not-minified/factoids.js',
          ]
        dest: 
          '_js/_js-not-minified/factoids-scroll.js'
      factoids1:  
        src: [
          '_js/scrollmagic/jquery.scrollmagic.js',
          '_js/_js-not-minified/factoids-wrapper1.js',
          '_js/_js-not-minified/index2-factoids.js',
          '_js/_js-not-minified/factoids-wrapper2b.js',
          '_js/_js-not-minified/index4-factoids.js',
          '_js/_js-not-minified/factoids-wrapper2.js',
          '_js/_js-not-minified/index6-factoids.js',
          '_js/_js-not-minified/factoids-wrapper3.js',
          ]
        dest: 
          '_js/_js-not-minified/factoids-scroll1.js'           
    uglify: 
      static_mappings: {
        files: [
          {src: '_resources/js/forms/source/rfi-combine-grunt.js', dest: '_resources/js/forms/rfi-combine-min.js'},
          {src: '_resources/js/secondary-nav.js', dest: '_resources/js/secondary-nav-min.js'},
          {src: '_resources/js/secondary-nav-cec.js', dest: '_resources/js/secondary-nav-cec-min.js'},
          {src: '_js/_js-not-minified/app/app-bcsr-combined.js', dest: '_js/app.js'},
          {src: '_js/_js-not-minified/app/app-cec-combined.js', dest: '_js/app-cec.js'},
          {src: '_js/_js-not-minified/index-concat.js', dest: '_js/index-contact.js'},
          {src: '_js/_js-not-minified/app-sync.js', dest: '_js/app-sync.js'},
          {src: '_js/_js-not-minified/map-footer-scripts-top.js', dest: '_js/map-footer-scripts-top.js'},
           {src: '_js/_js-not-minified/backgroundVideoCombined.js', dest: '_js/backgroundVideoCombined.js'},
          {src: '_js/_js-not-minified/factoids-scroll1.js', dest: '_js/factoids.min.js'},
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
          ###
          base: '/Users/kc2/Documents/Portfolio/BCSR/'
          ###
          keepalive: false,
          open: false

    browserSync:
      dist: 
        bsFiles: 
          src: ['*.js', '_css/**/*.css', '*.php']
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


  #grunt.registerTask('default', ['sass', 'concat', 'uglify', 'svgmin:bcsrIcons', 'grunticon:bcsrIcons', 'php'])

  grunt.registerTask('default', ['sass', 'concat', 'uglify'])


  grunt.registerTask('serve', ['php:dist', 'browserSync:dist', 'watch'])

