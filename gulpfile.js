"use strict";

const gulp = require("gulp");
const browserSync = require("browser-sync");
const webpack = require("webpack-stream");
const sass = require('gulp-sass')(require('sass'));
const rename = require("gulp-rename");
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const webp = require('gulp-webp');
const named = require('vinyl-named');
const htmlmin = require('gulp-htmlmin');

gulp.task("build-js", () => {
    return gulp.src("./src/js/pages/**.js")
      .pipe(named())
      .pipe(webpack({
        mode: 'production',
        output: {
          filename: '[name].js'
        },
        watch: false,
        // devtool: "source-map",
        // module: {
        //   rules: [
        //     {
        //       test: /\.m?js$/,
        //       exclude: /(node_modules|bower_components)/,
        //       use: {
        //         loader: 'babel-loader',
        //         options: {
        //           presets: [['@babel/preset-env', {
        //             debug: true,
        //             corejs: 3,
        //             useBuiltIns: "usage"
        //           }]]
        //         } 
        //       }
        //     }
        //   ]
        //   }
      }))
      .pipe(gulp.dest('./dist/js/pages'))
      .on("end", browserSync.reload);
});

gulp.task('styles', function() {
  return gulp.src("src/sass/**/*.sass")
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(rename({
      prefix: "",
      suffix: ".min"
    }))
    .pipe(autoprefixer({
      overrideBrowserslist: ['defaults'],
      cascade: false 
    }))
    .pipe(cleanCSS({
      compatibility: 'ie8'
    }))
    .pipe(gulp.dest("./dist/css"))
    .on("end", browserSync.reload);
});

gulp.task('blocks', function() {
  return gulp.src("src/blocks/*.php")
    .pipe(htmlmin({ collapseWhitespace: true }))
    .pipe(gulp.dest("./dist/blocks"))
    .on("end", browserSync.reload);
});

gulp.task('pages', function() {
  return gulp.src("src/*.php")
    .pipe(htmlmin({ collapseWhitespace: true }))
    .pipe(gulp.dest("./dist"))
    .on("end", browserSync.reload);
});

gulp.task('img', function() {
  return gulp.src("src/img/**")
    .pipe(gulp.dest("./dist/img"))
    .on("end", browserSync.reload);
});

gulp.task('imgwebp', function() {
  return gulp.src("dist/img/**")
    .pipe(webp())
    .pipe(gulp.dest("./dist/imgwebp"))
    .on("end", browserSync.reload);
});

gulp.task("watch", () => {
    browserSync.init({
      proxy: "firework73/dist"
    });
    gulp.watch("src/js/pages/**.js", gulp.parallel("build-js"));
    gulp.watch("src/sass/**/*.sass", gulp.parallel("styles"));
    gulp.watch("src/blocks/*.php", gulp.parallel("blocks"));
    gulp.watch("src/*.php", gulp.parallel("pages"));
    gulp.watch("src/img/**", gulp.parallel("img"));
    gulp.watch("dist/img/**", gulp.parallel("imgwebp"));
});

gulp.task("default", gulp.parallel(
  "watch", 
  "build-js",
  "styles", 
  "blocks",
  "pages",
  "img",
  "imgwebp",
));                             