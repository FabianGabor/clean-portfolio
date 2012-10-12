# encoding: utf-8
require 'rack'
require File.expand_path("../rack_try_static", __FILE__)

use ::Rack::TryStatic,
  :root => "build",
  :urls => ["/"],
  :try  => [".html", "index.html", "/index.html"]

require "rack/contrib/static_cache"
use Rack::StaticCache, urls: ['/'], root: 'build'

run lambda { [404, {"Content-Type" => "text/plain"}, ["File not found!"]] }