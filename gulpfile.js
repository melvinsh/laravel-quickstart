var _ = require('lodash');
var gulp = require('gulp');
var notify = require('gulp-notify');
var phpunit = require('gulp-phpunit');

gulp.task('phpunit', function() {
    gulp.src('phpunit.xml')
        .pipe(phpunit('/usr/local/bin/phpunit', { notify: true }))
        .on('error', notify.onError(testNotification('fail', 'phpunit')))
        .pipe(notify(testNotification('pass', 'phpunit')));
});

function testNotification(status, pluginName, override) {
    var options = {
        title:   ( status == 'pass' ) ? 'Tests Passed' : 'Tests Failed',
        message: ( status == 'pass' ) ? '\n\nAll tests have passed!\n\n' : '\n\nOne or more tests failed...\n\n',
        icon:    __dirname + '/node_modules/gulp-' + pluginName +'/assets/test-' + status + '.png'
    };
    options = _.merge(options, override);
    return options;
}

gulp.task('watch', function() {
    gulp.watch('app/**/*.php', ['phpunit'])
})

gulp.task('default', ['phpunit', 'watch'])