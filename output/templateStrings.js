"use strict";

var nombre = 'Carlos Villa Gran';
var edad = 47;
var pais = 'Chile'; // ES5

console.log('La persona es ' + nombre + ' tiene ' + edad + ' y es de ' + pais); // ES6

console.log("La persona es ".concat(nombre, "  tiene  ").concat(edad, "  y es de ").concat(pais));