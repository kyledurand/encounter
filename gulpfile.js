var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');

gulp.task('styles', function() {
  gulp.src('scss/main.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(autoprefixer('last 2 versions'))
  .pipe(gulp.dest('./css/'));
});

gulp.task('minify-css', function() {
  return gulp.src('css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./css/'));
});

gulp.task('default',function() {
  gulp.watch('scss/**/*.scss',['styles']);
  gulp.watch('css/main.css',['minify-css']);
});
