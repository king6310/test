var express = require('express');
var config = require('./config/index');

var port = process.env.PORT || config.build.port;

var app = express();