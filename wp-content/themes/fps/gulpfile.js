'use-strict';

var gulp = require('gulp');

var sass = require('gulp-sass');

var autoprefixer = require('gulp-autoprefixer');


//compile
gulp.task('sass', function () {
    return gulp.src('scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest('.'));
});

//compile and watch
gulp.task('watch', function() {
    return gulp.watch('scss/style.scss',gulp.series('sass'));
});
