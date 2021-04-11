// variables
var gulp = require('gulp');
var sass = require('gulp-sass');
var webserver = require('gulp-webserver');
var cleanCSS = require('gulp-clean-css');
var del = require('del');

//Folders
var paths = {
  srcSCSS: 'src/assets/scss/**/*.scss',
  srcSCSSapp: 'src/assets/scss/app.scss',
  srcImages: 'src/assets/images/**/*.*',
  srcFonts: 'src/assets/fonts/*.*',
  srcVendors: 'src/assets/vendors/**/*.*',

  dist: 'dist',
  distCSSfolder: 'dist/assets/css',
  distImages: 'dist/assets/images/',
  distFonts: 'dist/assets/fonts/',
  distVendors: 'dist/assets/vendors/'
};



////////////////////////////////////////////////////////////


//running webserver
gulp.task('serve', function () {
  return gulp.src(paths.dist)
    .pipe(webserver({
      port: 3000,
      livereload: true
    }));
});

//compile app SCSS file
gulp.task('css', function() {
    return gulp.src(paths.srcSCSSapp)
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.distCSSfolder));
});

//Copies les autres fichiers du projet dans dist
//gulp.task('nomtache', ['nomtache à accomplir avant'],  function() {
gulp.task('copyfonts', ['cleanfonts'],  function() {
  return gulp.src(paths.srcFonts)
      .pipe(gulp.dest(paths.distFonts));
});

gulp.task('copyimages', ['cleanimages'],  function() {
  return gulp.src(paths.srcImages)
      .pipe(gulp.dest(paths.distImages));
});

gulp.task('copyvendors', ['cleanvendors'], function() {
  return gulp.src(paths.srcVendors)
      .pipe(gulp.dest(paths.distVendors));
});

//Vider les dossiers dist avant copie
gulp.task('cleandist', function () {
  del([paths.dist]);
});
gulp.task('cleanimages', function () {
  del([paths.distImages]);
});
gulp.task('cleanfonts', function () {
  del([paths.distFonts]);
});
gulp.task('cleanvendors', function () {
  del([paths.distVendors]);
});

// Build - construire le dist
gulp.task('build', ['cleandist', 'css', 'copyfonts', 'copyimages', 'copyvendors']);

//Watch task
gulp.task('watch',['serve'], function() {
    gulp.watch(paths.srcSCSSapp,['css']);
    gulp.watch(paths.srcSCSS,['css']);
    gulp.watch(paths.srcFonts,['copyfonts']);
    gulp.watch(paths.srcImages,['copyimages']);
    gulp.watch(paths.srcVendors,['copyvendors']);
});
