const gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var paths = {
    scripts: 'assets/js/*.js',
    images: 'client/img/**/*'
};
gulp.task('scripts', function() {
    // Minify and copy all JavaScript (except vendor scripts)
    // with sourcemaps all the way down
    return gulp.src(paths.scripts)
        // .pipe(sourcemaps.init())
        // .pipe(coffee())
        .pipe(uglify())
        .pipe(concat('all.min.js'))
        // .pipe(sourcemaps.write())
        .pipe(gulp.dest('build/js'));
});

gulp.task('default',['scripts']);

