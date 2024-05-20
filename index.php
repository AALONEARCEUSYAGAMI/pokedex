<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contect="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
  <link rel="stylesheet" href="css/main.css">


</head>

<body>
    
<header>
<!--menu en la parte del header declarando sus clases para los estilos  en la lista y en los botones para javascript y su accion el id para el tipo de dato que retornara en javascript-->
 <nav class="nav">
 <img class="logo" src="./img/logo.png" alt="Logo pokedex">
<ul class="nav-list">
<li class="nav-item"> <button class="btn btn-header" id="ver-todos">Dex Nacional TODOS</button>  </li>
<li class="nav-item"> <button class="btn btn-header normal "  id="normal">Normal</button>  </li>
<li class="nav-item"> <button class="btn btn-header fire "  id="fire">Fire</button>  </li>
<li class="nav-item"> <button class="btn btn-header water" id="water">Water</button>  </li>
<li class="nav-item"> <button class="btn btn-header grass" id="grass">Grass</button>  </li>
<li class="nav-item"> <button class="btn btn-header electric" id="electric">Electric</button>  </li>
<li class="nav-item"> <button class="btn btn-header ice" id="ice">Ice</button>  </li>
<li class="nav-item"> <button class="btn btn-header fighting"  id="fighting">Fighting</button>  </li>
<li class="nav-item"> <button class="btn btn-header poison"  id="poison">Poison</button>  </li>
<li class="nav-item"> <button class="btn btn-header ground" id="ground">Ground</button>  </li>
<li class="nav-item"> <button class="btn btn-header flying" id="flying">Flying</button>  </li>
<li class="nav-item"> <button class="btn btn-header psychic" id="psychic">Psichic</button>  </li>
<li class="nav-item"> <button class="btn btn-header bug" id="bug">Bug</button>  </li>
<li class="nav-item"> <button class="btn btn-header rock"  id="rock">Rock</button>  </li>
<li class="nav-item"> <button class="btn btn-header ghost" id="ghost">Ghost</button>  </li>
<li class="nav-item"> <button class="btn btn-header dark" id="dark">Dark</button>  </li>
<li class="nav-item"> <button class="btn btn-header dragon" id="dragon">Dragon</button>  </li>
<li class="nav-item"> <button class="btn btn-header steel" id="steel">Steel</button>  </li>
<li class="nav-item"> <button class="btn btn-header fairy" id="fairy">Fairy</button>  </li>
<form class="formulario" id="searchForm">
        <label for="busqueda">Nombre del Pokémon:</label>
        <input class="inputnav"type="text" id="busqueda" name="q">
        <button class="buscar"type="submit">Buscar</button>
    </form>
</ul>

 </nav>

</header>
<main>
<!-- espacio de las tarjetas-->
<div id="todos">
   <div class="pokemon-todos" id="listaPokemon">
  <!-- <div class="pokemon">

<p class= "pokemon-id-back">#025</p>
      <div class="pokemon-imagen">
<img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/25.png" alt="pikachu">

      </div>
   <div class="pokemon-info">
    <div class="nombre-contenedor">
        <p class="pokemon-id">#025</p>
        <h2 class="pokemon-nombre">pikachu</h2>

    </div>
    <div class="pokemon-tipos">
<p class="electric tipo">ELECTRIC</p>
<p class="water tipo">WATER</p> 
    </div>
    <div class="pokemon-stats">

    <p class="stat">4m</p>

    <p class="stat">60g</p>
    <p class= "habilidad">ability: imposter</p>
    </div>
  
    <div class="pokemonaudio">
    <audio controls>
  <source src="ruta_del_archivo_de_audio.ogg" type="audio/ogg">
  Tu navegador no soporta la reproducción de audio Ogg.
</audio>
    </div>
</div>

</div>-->
</div>

</div>


</main>


<script src="js/main.js"></script>


</body>
<footer>
  
 <h5 > Diseñado por Aalone Arceus yagami usando la api <a href="https://pokeapi.co">pokeapi</a> (muchas gracias por herramientas de este tipo) uso didactico </h5>
</footer>
</html>