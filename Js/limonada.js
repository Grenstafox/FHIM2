const limonadaContainer = document.getElementById('limonada');

const limonadas = [
  { nombre: 'Limonada', precio: '$18', imagen: 'img/limonada.jpg' },
  { nombre: 'Limonada de coco', precio: '$25', imagen: 'img/limonada_coco.png' },
  { nombre: 'Raspado de limon', precio: '$20', imagen: 'img/limonada_natural.png' },
  { nombre: 'Limonada de fresa', precio: '$25', imagen: 'img/limonada_fresa.png' },
  { nombre: 'Limonada de fresa', precio: '$25', imagen: 'img/limonada_azul.png' }
];

limonadas.forEach(limonada => {
  limonadaContainer.innerHTML += `
    <div class="producto">
      <img src="${limonada.imagen}" alt="${limonada.nombre}">
      <h2>${limonada.nombre}</h2>
      <p>${limonada.precio}</p>
    </div>
  `;
});
