import gulp from 'gulp';
import yargs from 'yargs';
//import sass from 'gulp-sass';
const sass = require('gulp-sass')(require('sass'));
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';

const PRODUCTION = yargs.argv.prod;


export const styles = ()=> {
  return gulp.src('src/assets/scss/bundle.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION,cleanCSS({compatibility: 'ie8'})))
    .pipe(gulp.dest('dist/asset/css'));
};

export default styles;
