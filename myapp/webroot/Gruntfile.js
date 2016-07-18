"use strict";
module.exports = function(grunt) {
  grunt.initConfig({
    bowerInstall: {
      target: {
        src: [
          "../View/**/*.ctp",
        ],
        cwd: ".",
        dependencies: true,
        devDependencies: false,
        exclude: [],
        overrides: {},
        ignorePath: "../../webroot",
        fileTypes: {
          html: {
            replace: {
              js: "<script src=\"<?php echo $this->Html->webroot; ?>.{{filePath}}\"></script>",
              css: "<link rel=\"stylesheet\" href=\"<?php echo $this->Html->webroot; ?>.{{filePath}}\" />"
            }
          }
        }
      }
    },
    csscomb: {
      options: {
        config: "csscomb-config.json"
      },
      "build": {
        "files": {
          "css/main.css": ["css/main.css"]
        }
      }
    },
    cssbeautifier : {
      files : ["css/**/*.css"],
      options : {
        indent: "  ",
        openbrace: "end-of-line",
        autosemicolon: false
      }
    },
    bower_concat: {
      all: {
        dest: "js/all.js" ,
        "cssDest": "css/all.css",
        exclude: [],
        bowerOptions: {
          relative: false
        }
      }
    },
    minified : {
      files: {
        src: [
          "js/*.js"
        ],
        dest: "js/min/"
      },
      options : {
        sourcemap: true,
        allinone: false
      }
    }
  });
  grunt.loadNpmTasks("grunt-bower-install");
  grunt.loadNpmTasks("grunt-csscomb");
  grunt.loadNpmTasks("grunt-bower-concat");
  grunt.loadNpmTasks("grunt-minified");
  grunt.loadNpmTasks("grunt-cssbeautifier");
};
