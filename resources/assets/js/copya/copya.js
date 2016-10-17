
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
//const angular = require('angular');

import angular from 'angular';
import uirouter from 'angular-ui-router';
import routing from './copya.config';


angular.module('copya.app', [uirouter])
    .config(routing);

/*
require.context(
    "./components", // context folder
    true, // include subdirectories
    /.*!/ // RegExp
)("./" + expr + ".js");*/

//require('./components/'+ name + '.js');
//var req = require.context("./components", true, /^\.\/.*\.js/);

//var modules = [];

function requireAll(requireContext) {
    return requireContext.keys().map(requireContext);
}
// requires and returns all modules that match

//var modules = requireAll(require.context("./spec", true, /^\.\/.*\.js$/));
// is an array containing all the matching modules

var modules = requireAll(require.context("./components", true, /^\.\/.*\.js$/));

//angular.module('copya.app', []);
   // .config(routing);
