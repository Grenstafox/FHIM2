const vinoContainer = document.getElementById('vino');

const vinos = [
  { nombre: 'Vino Tinto', precio: '$45', imagen: 'img/vino.png' },
  { nombre: 'Vino Blanco', precio: '$48', imagen: 'img/blanco.png' },
  { nombre: 'Vino rojo', precio: '$48', imagen: 'img/vino_tinto.png' }
];

vinos.forEach(vino => {
  vinoContainer.innerHTML += `
    <div class="producto">
      <img src="${vino.imagen}" alt="${vino.nombre}">
      <h2>${vino.nombre}</h2>
      <p>${vino.precio}</p>
    </div>
  `;
});
