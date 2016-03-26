module.exports = function (grunt) {

    'use sctrict';
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
                '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
                '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
                '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
                ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
        concat: {
            options: {
                banner: '<%= banner %>',
                stripBanners: true
            },
            lib_js: {
                src: [
                    'bower_components/jquery/dist/jquery.min.js',
                    'bower_components/bootstrap/dist/js/bootstrap.min.js',
                    'bower_components/angular/angular.min.js',
                    'bower_components/angular-ui-mask/dist/mask.min.js'
                ],
                dest: 'dist/js/lib.js'
            },
            lib_css: {
                src: [
                    'bower_components/bootstrap/dist/css/bootstrap.min.css',
                    'src/SiteBundle/Resources/public/css/styles.css',
                    'src/SiteBundle/Resources/public/css/base.css'
                ],
                dest: 'dist/css/lib.css'
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-concat');

    grunt.registerTask('default', ['concat']);
};