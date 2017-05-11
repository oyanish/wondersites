var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');

gulp.task('default', function() {
    livereload.listen();
    gulp.watch('sass/**/*.scss',['styles', 'reload']);
    gulp.watch('**/*.php',['reload']);
});


gulp.task('styles', function () {
    gulp.src('sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'))
});

gulp.task('reload', function () {
    livereload();
});