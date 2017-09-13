var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		cleanCSS    = require('gulp-clean-css'),
		rename       = require('gulp-rename'),
		browserSync  = require('browser-sync').create(),
		concat       = require('gulp-concat'),
		uglify       = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    include = require('gulp-include'),
    pump = require('pump');

gulp.task('browser-sync', ['scss-customer', 'js-customer', 'img-customer'], function() {
		browserSync.init({
			proxy: "127.0.0.1",		
				notify: false
		});
});

gulp.task('scss-customer', function () {
	return gulp.src('customer/src/scss/*.scss')
	.pipe(sass({
		includePaths: require('node-bourbon').includePaths
	}).on('error', sass.logError))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
	.pipe(cleanCSS())
	.pipe(gulp.dest('customer/app/css/'))
	.pipe(browserSync.stream());
});

gulp.task('js-customer', function() {
	return gulp.src('customer/src/js/main.js')
    .pipe(sourcemaps.init())
    .pipe(include())
      .on('error', console.log)
    .pipe(sourcemaps.write())
		// .pipe(uglify()) 
		.pipe(gulp.dest('customer/app/js/'))
	  .pipe(browserSync.stream());
});

gulp.task('img-customer', function() {
  return gulp.src('customer/src/img/**/*')
     .pipe(gulp.dest('customer/app/img/'))
     .pipe(browserSync.stream());
});

gulp.task('watch', function () {
	gulp.watch('customer/src/scss/**/*.scss', ['scss-customer']);
	gulp.watch('customer/src/js/**/*.js', ['js-customer']);
	gulp.watch('customer/src/img/**/*', ['img-customer']);
	gulp.watch('app/js/*.js').on("change", browserSync.reload);
	gulp.watch('app/*.html').on('change', browserSync.reload);
	gulp.watch('**/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['browser-sync', 'watch']);
