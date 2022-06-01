/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/deleteMessage.js ***!
  \***************************************/
var deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach(function (element) {
  var title = element.getAttribute('data-name');
  element.addEventListener('submit', function (e) {
    e.preventDefault();
    var accept = confirm("Sei sicur* di voler eliminare il fumetto ".concat(title, " dalla lista?"));
    if (accept) e.target.submit();
  });
});
/******/ })()
;