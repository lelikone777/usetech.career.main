'use strict';

global.$ = {
  package: require('./package.json'),
  config: require('./gulp/config'),
  path: {
    task: require('./gulp/tasks.js')
  },
  gulp: require('gulp'),
  gp: require('gulp-load-plugins')()
};

$.path.task.forEach(function(taskPath) {
  require(taskPath)();
});

$.gulp.task('default', $.gulp.series( 'browsersync',
	$.gulp.parallel(
		'less',
		//'rename'
	)
));
