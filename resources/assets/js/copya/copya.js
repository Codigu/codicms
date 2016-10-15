
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
const routing = require('./copya.config');
const angular = require('angular');

angular.module('copya.app', [])
    .config(routing);

//angular.module('copya.app', []);

/*
require.context(
    "./components", // context folder
    true, // include subdirectories
    /.*!/ // RegExp
)("./" + expr + ".js");*/

//require('./components/'+ name + '.js');
//var req = require.context("./components", true, /^\.\/.*\.js/);

var module = [];

var modules = requireAll(require.context("./components", true, /^\.\/.*\.js$/));