'use strict';
let browsersync = require("browser-sync").create();

global.$ = {
  package: require('./package.json'),
  config: require('./gulp/config'),
  path: {
    task: require('./gulp/tasks.js')
  },
  gulp: require('gulp'),
  gp: require('gulp-load-plugins')(),
};

function browserSync() {
    browsersync.init({
        server: {
            baseDir: "project",
        },
        port: 3000,
        notify: false,
    });
}


$.path.task.forEach(function(taskPath) {

    require(taskPath)();
});
$.gulp.task('default', $.gulp.series(
    $.gulp.parallel(
        'less',
        //'rename',
        watchFiles,
        browserSync,
    )
));





exports.watch = watch;
exports.default = watch;