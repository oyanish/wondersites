var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('default', function() {
    livereload.listen();
    gulp.watch('sass/**/*.scss',['styles', 'reload']);
    gulp.watch('**/*.php',['reload']);
});


gulp.task('styles', function () {
    gulp.src('sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});

gulp.task('reload', function () {
    livereload();
});

gulp.task('autoprefixer', function () {
    gulp.src('./style.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./'));
});

