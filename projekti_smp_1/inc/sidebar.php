<aside id="sidebar">
            <?php
                if(isset($_POST['login'])){
                    login($_POST['email'],$_POST['fjalekalimi']);
                }
                if(!isset($_SESSION['anetari'])){
            ?>
            <form id="login" class="box" action="" method="post">
                <legend>Forma për hyrje</legend>
                <fieldset>
                    <label>Email: </label>
                    <input type="email" id="email" name="email">
                </fieldset>
                <fieldset>
                    <label>Fjalekalimi: </label>
                    <input type="password" id="fjalekalimi" name="fjalekalimi">
                </fieldset>
                <input type="submit" name="login" id="login" value="Kycu">
            </form>
            <?php } ?>
            <section class="box">
                <h3 class="title">SMP ka këto funksionalitete:</h3>
                <ol>
                    <li>Menaxhimin e anetareve(Shtimin| Fshirjen | Modifikimin)</li>
                    <li>Menaxhimin e projekteve(Shtimin| Fshirjen | Modifikimin)</li>
                    <li>Menaxhimin e puneve(Shtimin| Fshirjen | Modifikimin)</li>
                    <li>Hyrjen dhe Daljen nga sistemi</li>
                    <li>Menaxhime te tjera</li>
                </ol>
                <hr>
                <h3 class="title">Salloni Probit ofron:</h3>
                <ul>
                    <li>Prerjen e flokeve</li>
                    <li>Ngjyrosjen e flokeve</li>
                    <li>Kufizimin e mjekres</li>
                    <li>Ngjyrosjen e mjekres</li>
                    <li>Krem per fytyre</li>
                    <li>Detajet e sallonit -
                        <a href="https://probitacademy.com/courses/web-development-full-stack/">Probit</a>
                    </li>

                </ul>
            </section>

        </aside>