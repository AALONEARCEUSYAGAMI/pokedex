
//constantes uno es la lista  de pokemons del nav el otro los botones 
const listaPokemon = document.querySelector("#listaPokemon");
// Evento para Los botones
const botonesHeader = document.querySelectorAll(".btn-header");
// Evento para el formulario de búsqueda
const searchForm = document.getElementById("searchForm");
let URL= "https://pokeapi.co/api/v2/pokemon/";

for(let i= 1; i <= 1025; i++){

    fetch(URL + i)
    .then((response) => response.json())
    .then(data  => mostrarPokemon(data))
}


function mostrarPokemon(poke){
    let tipos = poke.types.map((type) => `<p class="${type.type.name} tipo">${type.type.name}</p>`);
tipos = tipos.join('');


let pokeId = poke.id.toString();

if (pokeId.length === 1) {
    pokeId = "00" + pokeId;
} else if (pokeId.length === 2) {
    pokeId = "0" + pokeId;
}
//conversion de los datos a la base real 
let pokeKg =poke.weight/10;
let pokeAlt =poke.height/10;


const div = document.createElement("div");
div.classList.add("pokemon");
div.innerHTML = `
<p class= "pokemon-id-back">#${pokeId}</p>
      <div class="pokemon-imagen">
      <img src="${poke.sprites.other["home"].front_default}" alt="${poke.name}">

      </div>
    
   <div class="pokemon-info">
    <div class="nombre-contenedor">
        <p class="pokemon-id">#${pokeId}</p>
        <!--me traigo el nombre de la especie para que me vote el correcto-->
        <h2 class="pokemon-nombre">${poke.species.name}</h2>

    </div>
    <div class="pokemon-tipos">
    ${tipos}
    </div>
    <div class="pokemon-stats">

    <p class="stat">${pokeAlt}m.</p>

    <p class="stat">${pokeKg}kg.</p>
 
    </div>
    <div class="pokemonaudio">
    <audio controls style="height: 25px;">
      <source src="${poke.cries.latest}" type="audio/ogg">
      Tu navegador no soporta la reproducción de audio Ogg.
    </audio>
  </div>
</div>
`;

listaPokemon.append(div);



}
//eventos para los botones\

botonesHeader.forEach(boton => boton.addEventListener("click", (event) => {
    const botonId = event.currentTarget.id;

    listaPokemon.innerHTML = "";

    for (let i = 1; i <= 1025; i++) {
        fetch(URL + i)
            .then((response) => response.json())
            .then(data => {
                if(botonId === "ver-todos") {
                    mostrarPokemon(data);
                } else {
                    const tipos = data.types.map(type => type.type.name);
                    if (tipos.some(tipo => tipo.includes(botonId))) {
                        mostrarPokemon(data);
                    }
                }
        

            })
    }
}))


searchForm.addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe

    const searchTerm = document.getElementById("busqueda").value.toLowerCase(); // Obtener el valor del campo de entrada y convertirlo a minúsculas

    // Limpia la lista de Pokémon
    listaPokemon.innerHTML = "";

    // Si el término de búsqueda está vacío, muestra todos los Pokémon
    if (searchTerm === "") {
        for (let i = 1; i <= 1025; i++) {
            fetch(URL + i)
                .then((response) => response.json())
                .then(data => mostrarPokemon(data));
        }
    } else { // Si hay un término de búsqueda, busca y muestra los Pokémon que coincidan
        fetch(`${URL}${searchTerm.toLowerCase()}`)
            .then((response) => response.json())
            .then(data => {
                if (data.name.toLowerCase().includes(searchTerm)) {
                    mostrarPokemon(data);
                }
            });
    }
});
