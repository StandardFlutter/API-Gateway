
const company = ['Google', 'Apple', 'Amazon', 'Microsoft', 'IBM']


// const numero_caracteres = company.map(function(inc) {
// 	console.log(`${inc} tem ${inc.length} letras`);
// });


const numero_caracteres = company.map( inc => `${inc} tem ${inc.length} letras`);


console.log(numero_caracteres)

