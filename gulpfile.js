var	gulp			= require('gulp'),
	sass			= require('gulp-sass'),
	autoprefixer	= require('gulp-autoprefixer'),
	watch			= require('gulp-watch'),
	livereload		= require('gulp-livereload');


gulp.task('sass', function() {
	gulp.src('scss/style.scss')
		.pipe(sass())
		.pipe(autoprefixer("last 2 version", "> 1%", "ie 9", "chrome 30", "firefox 24"))
		.pipe(gulp.dest('css'))
		.pipe(livereload({ auto: false }));
});


gulp.task('default', function() {
	livereload.listen();

	gulp.watch('scss/**/*.scss', ['sass']);
	gulp.watch('js/**/*.js').on('change', livereload.changed);
	gulp.watch('**/*.html').on('change', livereload.changed);
});


gulp.task('build', ['sass']);
