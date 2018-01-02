var gulp = require('gulp'); 
var del = require('del');   
var sass = require('gulp-sass'); 

var cleanCSS = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');
 

gulp.task('clean:build', function() {
    del('./wp-content/themes/aura/assets/css/index.css')
})

  
gulp.task("build", function(){
  return gulp.src('./wp-content/themes/aura/assets/sass/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./wp-content/themes/aura/assets/css/'));

})

gulp.task('styles:watch', function() {
    gulp.watch('./wp-content/themes/aura/assets/sass/*.sass', ['build']);
 
});

 
  

