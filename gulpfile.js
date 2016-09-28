var gulp        = require('gulp');
var stylus      = require('gulp-stylus');
var jeet        = require('jeet');
var rupture     = require('rupture');
var koutoSwiss  = require('kouto-swiss');

gulp.task('stylus', function () {
  return gulp.src('./assets/stylus/main.styl')
    .pipe(stylus({
            use: [jeet(), rupture(), koutoSwiss()]
        }))
    .pipe(gulp.dest('./assets/css/'));
}); 

gulp.task('watch', function(){
    gulp.watch('./assets/stylus/main.styl', ['stylus']);
});


gulp.task('default', ['watch','stylus']);