const gulp = require('gulp');
      gutil = require('gulp-util');
      cssmin = require('gulp-cssmin');
      postcss = require('gulp-postcss');
      sass = require('gulp-sass');
      plumber = require('gulp-plumber');
      sourcemaps = require('gulp-sourcemaps');
      clone = require('gulp-clone');
      livereload  = require('gulp-livereload');
      concat = require('gulp-concat');
      uglify = require('gulp-uglify');
      jshint = require('gulp-jshint');
      rm = require('gulp-rimraf');
      rename = require('gulp-rename');
      watch = require('gulp-watch');

const autoprefixer = require('autoprefixer');
const merge = require('merge-stream');


gulp.task('default', ['build']);

// Style config
gulp.task('scss:style', function () {
    return scssTask('style');
});
gulp.task('scss', groupTasks('scss:'));

// Script config
gulp.task('scripts:main', function() {
    return scriptTask('main');
});
gulp.task('scripts', groupTasks('scripts:'));

gulp.task('clean', function() {
    return gulp.src(['dist']).pipe(rm());
});

gulp.task('build', ['clean'], function(){
    gulp.start(['scripts', 'scss']);
});

gulp.task('watch', function () {
    gulp.watch(srcFiles.stylesheets.style.watch, ['sass']);
    gulp.watch(srcFiles.scripts.main.watch, ['scripts']);
});

let srcFiles = {
    scripts : {
        main : {
            files: ['assets/js/**/*.js'],
            watch: ['assets/js/**/*.js'],
            dest: 'dist/js',
            skipLint: false
        }
    },

    stylesheets: {
        style : {
            files: ['assets/css/global.scss'],
            watch: ['assets/css/**/*.scss'],
            dest: 'dist/css'
        }
    },

    assets: {
        images : ['assets/images/**/*'],
    }
};

function err(error) {
    let displayError = gutil.colors.red(error.message);
    gutil.log(displayError);
    gutil.beep();
    this.emit('end');
}

function scssTask(name) {
    let dest = srcFiles.stylesheets[name].dest;
    let source = gulp.src(srcFiles.stylesheets[name].files)
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'expanded' })).on('error', err)
        .pipe(postcss([
            autoprefixer({browsers: ['last 2 versions']}),
        ]));

    let pipeMinify = source.pipe(clone())
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('.', { sourceRoot: null }))
        .pipe(gulp.dest(dest));

    return merge(pipeMinify).pipe(livereload());
}


function scriptTask(name) {
    let dest = srcFiles.scripts[name].dest;
    let filesSource = gulp.src(srcFiles.scripts[name].files);

    if (!srcFiles.scripts[name].skipLint) {
        filesSource = filesSource.pipe(jshint()).pipe(jshint.reporter('jshint-stylish'));
    }

    filesSource = filesSource.pipe(sourcemaps.init())
        .pipe(concat(name + '.js'));

    let pipeUglify = filesSource.pipe(clone())
        .pipe(rename({
            basename: name,
            suffix: '.min'
        }))
        .pipe(uglify()).on('error', err)
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(dest));

    return merge(pipeUglify).pipe(livereload());
}

function groupTasks(taskName) {
    return Object.keys(gulp.tasks).filter(function(task){
        return task.indexOf(taskName) !== -1;
    });
}