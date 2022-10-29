const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const sassGlob = require('gulp-sass-glob');
const uglify = require('gulp-uglify');
var concat = require('gulp-concat');
const imagemin = require('gulp-imagemin');
const flatten = require('gulp-flatten');
const browserSync = require('browser-sync');


function buildingStyles(){
    return gulp.src('./theme/**/*.scss')
    .pipe(sassGlob())
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({}))
    .pipe(gulp.dest('resources/css/'));
}

function uglifyJS(){
    return gulp.src('./theme/**/*.js')
        .pipe(uglify())
        .pipe(concat('main.js'))
        .pipe(gulp.dest('resources/js/'));
}

function imageOptimize(){
    return gulp.src('./theme/**/*.{jpg,jpeg,png,svg,JPG}')
    .pipe(imagemin())
    .pipe(flatten())
    .pipe(gulp.dest('resources/images/'));
}

function watch(){

    gulp.watch('./portfolio/theme/**/*.scss', (cb) => {
        buildingStyles();
        cb();
    });

    gulp.watch('./theme/**/*.js', (cb) => {
        uglifyJS();
        cb();
    });

    gulp.watch('./theme/**/*.{jpg,png,svg}', (cb) => {
        imageOptimize();
        cb();
    });
}

function dev(){
    browserSync.init({
        server: './public'
    });

    gulp.watch('./pages/*.php', (cb) => {
        browserSync.reload();
        cb();
    });

    gulp.watch('./theme/**/*.scss', (cb) => {
        buildingStyles();
        browserSync.reload();
        cb();
    });

    gulp.watch('./theme/**/*.js', (cb) => {
        uglifyJS();
        browserSync.reload();
        cb();
    });

    gulp.watch('./theme/**/*.{jpg,png,svg}', (cb) => {
        imageOptimize();
        browserSync.reload();
        cb();
    });
}


exports.buildingStyles = buildingStyles;
exports.uglifyJS = uglifyJS;
exports.imageOptimize = imageOptimize;
exports.build = gulp.parallel(buildingStyles,uglifyJS,imageOptimize);
exports.watch = gulp.series(gulp.parallel(buildingStyles,uglifyJS,imageOptimize),watch);
exports.dev = gulp.series(gulp.parallel(buildingStyles,uglifyJS,imageOptimize),dev);