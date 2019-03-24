'use-strict';

var gulp            = require('gulp');
var sass            = require('gulp-sass');
var autoprefixer    = require('gulp-autoprefixer');
var minifyCss       = require('gulp-minify-css');
var concat          = require('gulp-concat');

//compile
gulp.task('sass', function () {
    return gulp.src('scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(minifyCss())
    .pipe(concat('./style.min.css'))
    .pipe(gulp.dest('.'));
});

//watch
gulp.task('watch', function() {
    return gulp.watch('scss/*.scss',gulp.series('sass'));
});
