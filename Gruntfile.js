module.exports = function (grunt) {
  'use strict';
  // Project configuration
  grunt.initConfig({
      // Metadata
      pkg: grunt.file.readJSON('package.json'),
      banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
          '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
          '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
          '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
          ' Licensed <%= props.license %> */\n',

      // PHP Code Sniffer
      // ================
      phpcs: {
        core: {
          dir: ['*.php']
        },
        options: {
          bin: 'vendor/bin/phpcs',
          standard: 'Wordpress'
        }
      },
      // JS Hint
      // =======
      jshint: {
        options: {
          jshintrc: 'javascripts/js/.jshintrc'
        },
        core: {
          src: 'javascripts/js/*.js'
        }
      },
      // JS Coding Style
      // ===============
      jscs: {
        options: {
          config: 'javascripts/js/.jscsrc'
        },
        core: {
          src: '<%= jshint.core.src %>'
        }
      },
      // SCSS Lint
      // =========
      scsslint: {
        allFiles: [
          'stylesheets/scss/*.scss'
        ],
        options: {
          bundleExec: true,
          config: 'stylesheets/scss/.scss-lint.yml',
          colorizeOutput: true
        }
      },
      // SASS Compile
      // ============
      sass: {
        options: {
          style: 'expanded',
          sourcemap: 'auto'
        },
        dist: {
          files: {
            'stylesheets/sustainability-solutions-wordpress-theme.css' : 'stylesheets/scss/sustainability-solutions-wordpress-theme.scss',
          }
        }
      },
      // CSS Minify
      // ==========
      cssmin: {
        target: {
            files: [{
              expand: true,
              cwd: 'stylesheets',
              src: ['*.css', '!*.min.css'],
              dest: 'stylesheets',
              ext: '.min.css'
            }]
        }
      },
      // JS Compile
      // ==========
      concat: {
        javascripts: {
            src: [
                'javascripts/js/sustainability-solutions-wordpress-theme.js',
                'javascripts/js/lib/*.js',
                'javascripts/js/_*.js'
            ],
            dest: 'javascripts/sustainability-solutions-wordpress-theme.js'
        }
      },
      // JS Uglify
      // =========
      uglify: {
        options: {
          preserveComments: 'some'
        },
        core: {
          src: '<%= concat.javascripts.dest %>',
          dest: 'javascripts/sustainability-solutions-wordpress-theme.min.js'
        }
      },
    });

    // These plugins provide necessary tasks
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-jscs');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-phpcs');

    // Default task
    grunt.registerTask('default', [
        'jshint',
        'jscs',
        'scsslint',
        'sass',
        'concat',
        'uglify',
        'cssmin',
        'phpcs']);
};
