(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
var App=function(){};App.prototype.initialize=function(){window.console&&console.log("Application started..."),this.externalLinks()},App.prototype.externalLinks=function(){$("a[rel=external]").attr("target","_blank")},module.exports=App;
},{}],2:[function(require,module,exports){
var App=require("./app"),app=new App;$(document).on("ready",function(){app.initialize()});
},{"./app":1}]},{},[2])


//# sourceMappingURL=bundle.map.on