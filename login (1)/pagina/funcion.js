// Selecciona el input del selector de color
const colorPicker = document.getElementById("colorPicker");
// Escucha el evento 'input' en el selector de color
colorPicker.addEventListener("input", function() {
// Obtiene el valor del selector de color
 const color = colorPicker.value;

// Actualiza el color de fondo de la página
document.body.style.backgroundColor = color;
});

document.write("Holaa");