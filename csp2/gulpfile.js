var gulp = require('gulp');
var livereload = require('gulp-livereload');
var jscs = require('gulp-jscs');
var uglifyjs = require('gulp-uglify');
var uglifycss = require('gulp-uglifycss');
var phpcs = require('gulp-phpcs');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

gulp.task('validate-php', function () {
    return gulp.src(["*.php", "./**/*.php", "!vendor/**/*.*"])
        .pipe(phpcs({
            bin: 'vendor/bin/phpcs',
            colors: true,
            standard: 'PSR1'
        }))
        .pipe(phpcs.reporter('log'));
});

gulp.task('validate-js', function () {
    return gulp.src("src/js/*.js")
        .pipe(jscs.reporter())
        .pipe(jscs.reporter('fail'));
});

gulp.task('js', ['validate-js'], function () {
    return gulp.src("src/js/*.js")
        .pipe(uglifyjs())
        .pipe(gulp.dest("assets/js"));
});

gulp.task('css', function () {
    return gulp.src("src/css/*.css")
        .pipe(uglifycss())
        .pipe(gulp.dest("assets/css"));
});

gulp.task('img', function () {
    return gulp.src("src/img/*")
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest("assets/img"));
});

gulp.task('watch', function () {
    var server = livereload();
    gulp.watch("src/js/*.js", ['js']);
    gulp.watch("src/css/*.css", ['css']);
    gulp.watch("src/img/*", ['img']);
    gulp.watch(["assets/js/*.js", "assets/css/*.css", "assets/img/*", "*.php"]).on(
        'change',
        function (event) {
            server.changed(event.path);
        }
    );
});

gulp.task('default', ['js', 'css', 'img', 'validate-php'], function () {

});
