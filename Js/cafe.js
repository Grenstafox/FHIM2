const cafeContainer = document.getElementById('cafe');

const cafes = [
  { nombre: 'Café Negro', precio: '$20', imagen: 'img/cafe.png' },
  { nombre: 'Café Americano', precio: '$25', imagen: 'img/Machiato.png' },
  { nombre: 'Café Negro', precio: '$20', imagen: 'img/cafe_negro.png' },

];

cafes.forEach(cafe => {
  cafeContainer.innerHTML += `
    <div class="producto">
      <img src="${cafe.imagen}" alt="${cafe.nombre}">
      <h2>${cafe.nombre}</h2>
      <p>${cafe.precio}</p>
    </div>
  `;
});
