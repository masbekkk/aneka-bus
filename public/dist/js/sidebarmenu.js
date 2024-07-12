/*
Template Name: Admin Template
Author: Wrappixel

File: js
*/
// ==============================================================
// Auto select left navbar
// ==============================================================
$(function () {
  "use strict";
  var url = window.location.href;
  var path = window.location.pathname; // get the path part of the URL

  // Function to check if the path starts with the element href
  function checkPathMatch(href, path) {
    // Normalize both href and path
    var normalizedHref = new URL(href, window.location.origin).pathname;
    return path === normalizedHref || path.startsWith(normalizedHref + '/');
  }

  var element = $("ul#sidebarnav a").filter(function () {
    var href = $(this).attr('href');
    return href && checkPathMatch(href, path);
  });

  element.parentsUntil(".sidebar-nav").each(function () {
    if ($(this).is("li") && $(this).children("a").length !== 0) {
      $(this).children("a").addClass("active");
      if ($(this).parent("ul#sidebarnav").length === 0) {
        $(this).addClass("active");
      } else {
        $(this).addClass("selected");
      }
    } else if (!$(this).is("ul") && $(this).children("a").length === 0) {
      $(this).addClass("selected");
    } else if ($(this).is("ul")) {
      $(this).addClass("in");
    }
  });

  element.addClass("active");
  $("#sidebarnav a").on("click", function (e) {
    if (!$(this).hasClass("active")) {
      // hide any open menus and remove all other classes
      $("ul", $(this).parents("ul:first")).removeClass("in");
      $("a", $(this).parents("ul:first")).removeClass("active");

      // open our new menu and add the open class
      $(this).next("ul").addClass("in");
      $(this).addClass("active");
    } else if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).parents("ul:first").removeClass("active");
      $(this).next("ul").removeClass("in");
    }
  });
  $("#sidebarnav >li >a.has-arrow").on("click", function (e) {
    e.preventDefault();
  });
});
