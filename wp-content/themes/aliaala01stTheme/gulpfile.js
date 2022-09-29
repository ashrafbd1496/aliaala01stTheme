var gulp = require("gulp");

gulp.task('default', defaultTask);

function defaultTask(done){
  console.log('hello')
  done();
}

gulp.task('hello', function(done){
  console.log('gulp test task');
  done();
})