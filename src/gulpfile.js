var gulp         = require('gulp'),
    notify       = require('gulp-notify'),
    plumber      = require('gulp-plumber'),
    autoprefixer = require('gulp-autoprefixer'),
    concatJs     = require('gulp-concat'),
    concatCss    = require('gulp-concat-css'),
    CleanCSS     = require('clean-css'),
    map          = require('vinyl-map'),
    sass         = require('gulp-sass'),
    uglify       = require('gulp-uglify'),
    gutil        = require('gulp-util')

var paths = {
  sass: {
    entry: './stylesheets/components.sass',
    dest: '../assets/css/'
  },
  js: {
    entry: './js/*.js',
    dest: '../assets/js/'
  },
  watch: {
    css: './stylesheets/*.css',
    sass: './stylesheets/**/*.sass',
    js: './js/*.js'
  }
}

var err = new gutil.PluginError('test', {
message: 'something broke'
});

gulp.task('default', ['run:developing'])

function errorAlert(error){
  gutil.log(gutil.colors.red('Error('+ gutil.colors.blue(error.plugin) +')' + error.message))
  notify.onError({title: "Error", message: "Check your terminal", sound: "Sosumi"})(error); //Error Notification
  this.emit("end"); //End function
};

/*Compile Sass*/
gulp.task('sass:compile', function () {
  var minify = map(function (buff, filename) {
    return new CleanCSS({
    }).minify(buff.toString()).styles;
  });

  return gulp.src(paths.sass.entry)
    .pipe(plumber({errorHandler: errorAlert}))
    .pipe(sass({style: "compressed", noCache: true}))
    .pipe(concatCss('styles.css'))
    .pipe(autoprefixer({
      cascade: true
    }))
    .pipe(minify)
    .pipe(plumber.stop())
    .pipe(gulp.dest(paths.sass.dest))
    .pipe(notify({
      'title':'Sass compile',
      'sound': true,
      'message': "Yey! Sass compile as: <%= file.relative %>!"
      }))

});

/*Compile Js*/
gulp.task('minify:js', function(){
  return gulp.src(paths.js.entry)
    .pipe(plumber({errorHandler: errorAlert}))
    .pipe(uglify())
    .pipe(concatJs('app.js'))
    .pipe(plumber.stop())
    .pipe(gulp.dest(paths.js.dest))
    .pipe(notify({
      'title':'JS compile',
      'sound': true,
      'message': "Minify js file: <%= file.relative %>!"
      }))
});

gulp.task('run:developing', function () {
  gulp.watch([paths.watch.sass, paths.watch.css], ['sass:compile']);
  gulp.watch(paths.watch.js, ['minify:js']);

  gutil.log(
    ' \n\n ',
    gutil.colors.yellow('\n Listen all sass files in '+ paths.watch.sass),
    gutil.colors.yellow('\n Listen all css files in '+ paths.watch.css),
    gutil.colors.yellow('\n Listen all js files in '+ paths.watch.js),
    '\n\n',
    gutil.colors.blue('\n destiny : ' + paths.sass.dest),
    gutil.colors.blue('\n destiny : ' + paths.js.dest),
    ' \n\n ',
    gutil.colors.green('\n all is ready, have fun !')
  );
});
