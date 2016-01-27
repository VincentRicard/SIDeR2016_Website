var gulp = require('gulp'),
	postcss = require('gulp-postcss'),
  livereload = require('gulp-livereload'),
	nano = require('gulp-cssnano'),
	browserSync = require('browser-sync').create(),
	processors = [
		// require('postcss-mixins'),
		// require('postcss-simple-vars'),
		require('postcss-nested'),
		require('precss'),
		require('autoprefixer')({ browsers: ['last 2 versions', '> 2%'] }),
		require('lost'),
		require('postcss-font-magician')({
			hosted:'fonts'})

	];

gulp.task('css', function() {
    return gulp.src(['css/style.css'])
      .pipe(postcss(processors))
			// .pipe(nano())
      .pipe(gulp.dest('css/dist'))
      .pipe(livereload());
});

// gulp.task('reload', function(){
// 	livereload.reloadPage;
// });

gulp.task('default', function() {
  livereload.listen();
  gulp.watch('css/style.css', ['css']);
	gulp.watch('index.html', ['css']);
});
