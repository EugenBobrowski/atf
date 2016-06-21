module.exports = function (grunt) {
    grunt.initConfig({
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    // "assets/css/style.css": "assets/less/bootstrap.less",
                    "assets/css/theme.css": "assets/less/theme.less"
                }
            }
        },
        compress: {
            main: {
                options: {
                    archive: 'subscription-industry.zip'
                },
                files: [
                    {expand: true, src: ['**', '!node_modules/**', '!theme.zip'], dest: '/'}
                ]
            }
        },
        watch: {
            styles: {
                files: ['assets/less/**/*.less'], // which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);
};