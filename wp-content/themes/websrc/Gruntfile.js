module.exports = function (grunt) {
	require('load-grunt-config')(grunt, {
		jitGrunt: true
	});

	var config = {
		paths: {
			'build': 'build',
			'src': 'src',
			'scss': 'scss',
			'css': 'css',
			'js': 'js',
			'node': 'node_modules',
			'bower': 'bower_components',
			'release': '../herz-studio'
		},
		ftp: {
			'host': '',
			'key': '',
			'dest': ''
		}
	};

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		paths: config.paths,
		ftp: config.ftp,

		sass: {
			dist: {
				files: {
					'<%= paths.release %>/<%= paths.css %>/main.css': '<%= paths.scss %>/dev.scss',
				}
			}
		},

		postcss: {
			options: {
				map: true,
				processors: [
					require('autoprefixer')({browsers: 'last 2 versions'}),
					require('cssnano')()
				]
			},
			dist: {
				src: '<%= paths.release %>/<%= paths.css %>/*.css'
			}
		},

		watch: {
			css: {
				files: ['<%= paths.scss %>/**/*.scss'],
				tasks: ['sass']
			},
			js: {
				files: ['<%= paths.js %>/**/*.js'],
				tasks: ['rollup']
			}
		},

		rollup: {
			"options": {
				"format": "iife",
				moduleName: '',
				"plugins": [
					require("rollup-plugin-babel")({
						"presets": [["env", {"modules": false}]],
						"plugins": ["external-helpers", 'transform-object-rest-spread']
					})
				],
			},
			"dist": {
				"files": {
					'<%= paths.release %>/<%= paths.js %>/main.js': ["js/index.js"]
				}
			}
		},

		uglify: {
			build: {
				options: {
					compress: false,
					mangle: true,
					beautify: false
				},
				src: '<%= paths.release %>/<%= paths.js %>/main.js',
				dest: '<%= paths.release %>/<%= paths.js %>/main.js'
			},

			vendors: {
				options: {
					compress: false,
					mangle: true,
					beautify: false
				},
				src: [
					'<%= paths.node %>/jquery/dist/jquery.js',
					//'<%= paths.node %>/popper.js/dist/umd/popper.js',
					//'<%= paths.node %>/bootstrap/dist/js/bootstrap.js',
					//'<%= paths.node %>/flexslider/2.6.1/jquery.flexslider.js',
					//'<%= paths.node %>/jquery-colorbox/jquery.colorbox.js',
					'<%= paths.node %>/swiper/dist/js/swiper.min.js',
					'<%= paths.node %>/skrollr/dist/skrollr.min.js',
					'<%= paths.node %>/waypoints/lib/noframework.waypoints.js',
				],
				dest: '<%= paths.release %>/<%= paths.js %>/vendors.js'
			}
		},

		copy: {
			images: {
				expand: true,
				cwd: 'img/',
				src: ['**'],
				dest: '<%= paths.release %>/img/',
			},
			fonts: {
				expand: true,
				src: ['fonts/*'],
				dest: '<%= paths.release %>/',
				filter: 'isFile'
			}
		}

	});

	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-pngmin');
	grunt.loadNpmTasks('grunt-rollup');

	grunt.registerTask('build:dev', [
		'sass',
		'rollup'
	]);

	grunt.registerTask('build:vendors', [
		'uglify:vendors'
	]);

	grunt.registerTask('build', [
		'rollup',
		'uglify',
		'sass',
		'postcss'
	]);

};
