"use strict";

var company = ['Google', 'Apple', 'Amazon', 'Microsoft', 'IBM']; // const numero_caracteres = company.map(function(inc) {
// 	console.log(`${inc} tem ${inc.length} letras`);
// });

var numero_caracteres = company.map(function (inc) {
  return "".concat(inc, " tem ").concat(inc.length, " letras");
});
console.log(numero_caracteres);