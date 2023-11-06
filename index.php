<?php require("views/header.php"); ?>


    <dialog id="dialogRegistro">
        <form method="dialog">
            <h1>Registro</h1>
            <div>
                <label for="txtEmail">Correo electrónico</label>
                <input type="email" name="email" id="txtEmail" placeholder="Introduce tu email">
                <p class="info">El email es obligatorio</p>
            </div>
            <div>
                <label for="txtUsername">Nombre de usuario</label>
                <input type="text" name="username" id="txtUsername" placeholder="Introduce tu nombre de usuario">
            </div>
            <div>
                <label for="txtContraseña">Contraseña</label>
                <input type="password" name="password" id="txtContraseña" placeholder="Elige una contraseña">
                <p class="info">La contraseña debe contenes mayusculas y caracteres especiales</p>
            </div>
            <div>
                <input type="submit" value="Registrar usuario">
            </div>
        </form>
    </dialog>

    <main>

        <section id="hero">
            <video src="static/video/video_fondo.mp4" autoplay muted loop></video>
            <div>
                <h1>Nombre de mi página</h1>
                <p>La mejor tienda online del universo virtual</p>
                <a href="#" id="btnRegistro">Registrate</a>
            </div>
        </section>

        <?php 
            require("views/gallery.php");
         ?>

        <section class="boxed">
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestiae quia porro saepe, iste ipsum ea sapiente repudiandae, architecto maiores ipsam laboriosam optio minima, doloremque at distinctio aperiam consectetur dignissimos?</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fuga est ut sed placeat ab rem velit, corrupti, porro nostrum amet! Quo impedit, sequi dolor quam saepe enim facere numquam!</h1>                             
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores pariatur at iusto provident iure quod saepe. Laboriosam minima alias doloribus, neque at eaque assumenda aperiam eligendi? Laboriosam dolorum nemo dolores.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestiae quia porro saepe, iste ipsum ea sapiente repudiandae, architecto maiores ipsam laboriosam optio minima, doloremque at distinctio aperiam consectetur dignissimos?</h1>
        
                <div class="col2">
                        <img src="https://picsum.photos/600?9" alt="">
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illo, repellat pariatur nisi voluptates eveniet! Voluptatem aspernatur, sed quibusdam vel nam laboriosam quaerat alias, a quod iste ratione. Neque, totam.</p>
                        </div>
                </div>

                <div class="col2">
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illo, repellat pariatur nisi voluptates eveniet! Voluptatem aspernatur, sed quibusdam vel nam laboriosam quaerat alias, a quod iste ratione. Neque, totam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illo, repellat pariatur nisi voluptates eveniet! Voluptatem aspernatur, sed quibusdam vel nam laboriosam quaerat alias, a quod iste ratione. Neque, totam.</p>

                    </div>
                    <img src="https://picsum.photos/600?9" alt="">
                </div>           
            
        </section>

 


        <section class="boxed" style="background-color:green">
            <div class="inner">
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fuga est ut sed placeat ab rem velit, corrupti, porro nostrum amet! Quo impedit, sequi dolor quam saepe enim facere numquam!</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores pariatur at iusto provident iure quod saepe. Laboriosam minima alias doloribus, neque at eaque assumenda aperiam eligendi? Laboriosam dolorum nemo dolores.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestiae quia porro saepe, iste ipsum ea sapiente repudiandae, architecto maiores ipsam laboriosam optio minima, doloremque at distinctio aperiam consectetur dignissimos?</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fuga est ut sed placeat ab rem velit, corrupti, porro nostrum amet! Quo impedit, sequi dolor quam saepe enim facere numquam!</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores pariatur at iusto provident iure quod saepe. Laboriosam minima alias doloribus, neque at eaque assumenda aperiam eligendi? Laboriosam dolorum nemo dolores.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestiae quia porro saepe, iste ipsum ea sapiente repudiandae, architecto maiores ipsam laboriosam optio minima, doloremque at distinctio aperiam consectetur dignissimos?</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fuga est ut sed placeat ab rem velit, corrupti, porro nostrum amet! Quo impedit, sequi dolor quam saepe enim facere numquam!</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores pariatur at iusto provident iure quod saepe. Laboriosam minima alias doloribus, neque at eaque assumenda aperiam eligendi? Laboriosam dolorum nemo dolores.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestiae quia porro saepe, iste ipsum ea sapiente repudiandae, architecto maiores ipsam laboriosam optio minima, doloremque at distinctio aperiam consectetur dignissimos?</h1>
            </div>
        </section>

    </main>
    
    <div id="totop">
        <a href="#">Ir arriba</a>
    </div>

 <?php require("views/footer.php"); ?>