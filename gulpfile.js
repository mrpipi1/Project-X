// *** GULP *** ///
var gulp = require('gulp');
// ***  AUTOPREFIXER *** //
var autoprefixer = require('gulp-autoprefixer');
// ***  IMAGEMIN *** //
var imagemin = require('gulp-imagemin');
// ***  HTML / PHP MIN *** //
var htmlmin = require('gulp-htmlmin');
// ***  CSS SHORTHAND *** //
var shorthand = require('gulp-shorthand');


// ***  autoprefixer *** //
gulp.task('prefixer', function () {
	return gulp.src('css/styles.css')
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('GULP-FINISH/css'));
});

gulp.task('shorthand', ['prefixer'], function () {
	return gulp.src('gulp-finish/css/*.css')
		.pipe(shorthand())
		.pipe(gulp.dest('gulp-finish/css'));
});

// // ***  imagemin *** //
gulp.task('imagemin', () =>
	gulp.src('img/*/**')
		.pipe(imagemin())
		.pipe(gulp.dest('GULP-FINISH/img'))
);


gulp.task('minify', function() {
  return gulp.src('content/*.php')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('gulp-finish/content'))
});

gulp.task('minify-header', function() {
  return gulp.src('header.php')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('gulp-finish'))
});

gulp.task('minify-footer', function() {
  return gulp.src('footer.php')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('gulp-finish'))
});



gulp.task('default', ['prefixer', 'imagemin', 'shorthand', 'minify', 'minify-header', 'minify-header']);
