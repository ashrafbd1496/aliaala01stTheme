import gulp from 'gulp';
import yargs from 'yargs';
//import sass from 'gulp-sass';
const sass = require('gulp-sass')(require('sass'));

const PRODUCTION = yargs.argv.prod;


export const styles = ()=> {
  return gulp.src('src/assets/scss/bundle.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('dist/asset/css'));
};

export default styles;
