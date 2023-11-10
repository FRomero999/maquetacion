<?php require_once("data.php"); ?>

<?php require("views/header.php"); ?>

<div class="admin">
    <aside>
        <button id="minimize">minimize</button>

        <a href="#"><img src="https://picsum.photos/24"> <span>Opcion1</span></a>
        <a href="#"><img src="https://picsum.photos/24"> <span>Opcion2</span></a>
        <a href="#"><img src="https://picsum.photos/24"> <span>Opcion3</span></a>
        <a href="#"><img src="https://picsum.photos/24"> <span>Opcion4</span></a>
        <div class="separator"></div>
        <a href="#"><img src="https://picsum.photos/24"> <span>Opcion5</span></a>
        <a href="#"><img src="https://picsum.photos/24"> <span>Opcion6</span></a>
        <a href="#"><img src="https://picsum.photos/24"> <span>Opcion7</span></a>
        <a href="#"><img src="https://picsum.photos/24"> <span>Opcion8</span></a>

    </aside>

    <main class="admin">
        <h1>Listado de productos</h1>
        <p class="total">Total de juegos en activo: <span><?=count($videojuegos_retro)?></span> </p>

        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="2">Id</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Año</th>
                        <th>Plataforma</th>
                        <th colspan="2">Descripción</th>
                        
                    </tr>        
                </thead>
                <tbody>
                <?php foreach($videojuegos_retro as $juego):?>
                    <tr>
                        <td><input type="checkbox" name="seleccion[]" value="<?=$juego["id"]; ?>" form="editForm"></td>
                        <td><?=$juego["id"]; ?></td>
                        <td><?=$juego["nombre"]; ?></td>
                        <td><?=$juego["categoria"]; ?></td>
                        <td><?=$juego["año"]; ?></td>
                        <td><?=$juego["plataforma"]; ?></td>
                        <td><?=$juego["descripcion"]; ?></td>
                        <td class="options">
                            <div> 
                                <button type="submit" form="editForm" name="editar" value="<?=$juego["id"]; ?>" ><img src="static/img/artista.png"></button>
                                <button type="submit" form="editForm" name="borrar" value="<?=$juego["id"]; ?>"><img src="static/img/borrar.png"></button>
                            </div>
                        </td>
                    </tr>    
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8">
                            <button type="submit" form="editForm" name="seleccion[]" value="Borrar" >Borrar la selección</button>
                        </td>
                    </tr>
                </tfoot>

            </table>
        </div>

        <form action="test.php" target="_blank" id="editForm" method="post">

        </form>

    </main>
</div>



<?php require("views/footer.php"); ?>