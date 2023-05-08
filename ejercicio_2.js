function ordenarPorPropiedad(array, propiedad) {
  return array.sort((a, b) => {
    if (a[propiedad] < b[propiedad]) {
      return -1;
    }
    if (a[propiedad] > b[propiedad]) {
      return 1;
    }
    return 0;
  });
}

let personas = [
  { nombre: "Juan", edad: 30 },
  { nombre: "Ana", edad: 25 },
  { nombre: "Pedro", edad: 35 },
  { nombre: "María", edad: 28 }
];

let personasOrdenadas = ordenarPorPropiedad(personas, "edad");

console.log(personasOrdenadas);

// pueden correr este codigo con Quokka para obtener el resultado

// [
//   { nombre: "Ana", edad: 25 },
//   { nombre: "María", edad: 28 },
//   { nombre: "Juan", edad: 30 },
//   { nombre: "Pedro", edad: 35 }
// ]