<?php
ob_start();
$title = 'Deskad | Connexion';
?>

<section id="connect">

    <div class="signup">
        <form method="POST" action="index.php?action=signupMember" id="form-signup">
    
            <h2 class="title-form">Pas encore inscrit ? C'est par ici !</h2>
    
            <div class="cont-row">
                <div class="form-cont firstname">
                    <p>
                        <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" id="firstname">
                        <span class="error"></span>
                    </p>
                </div>
                <div class="form-cont lastname">
                    <p>
                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" id="lastname">
                        <span class="error"></span>
                    </p>
                </div>
            </div>
    
            <div class="cont-row">
                <div class="form-cont pseudo">
                    <p>
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo">
                        <span class="error"></span>
                    </p>
                </div>
                <div class="form-cont email">
                    <p>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                        <span class="error"></span>
                    </p>
                </div>
            </div>
    
            <div class="cont-row">
                <div class="form-cont password">
                    <p>
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password">
                        <span class="error"></span>
                    </p>
                </div>
                <div class="form-cont cpassword">
                    <p>
                        <label for="cpassword">Confirmer Mot de passe</label>
                        <input type="password" name="cpassword" id="cpassword">
                        <span class="error"></span>
                    </p>
                </div>
            </div>
    
            <div class="cont-row">
                <div class="form-cont submit">
                    <p>
                        <input type="submit" value="Envoyer">
                    </p>
                </div>
            </div>
    
        </form>
    </div>

    <div class="signin">
        <form method="POST" action="index.php?action=member" id="form-signin">
    
            <h2 class="title-form">Déjà inscrit ? Connectez-vous !</h2>
    
            <div class="cont-row">
                <div class="form-cont email">
                    <p>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                        <span class="error"></span>
                    </p>
                </div>
                <div class="form-cont password">
                    <p>
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password">
                        <span class="error"></span>
                    </p>
                </div>
            </div>
    
            <div class="cont-row">
                <div class="form-cont submit">
                    <p>
                        <input type="submit" value="Envoyer">
                    </p>
                </div>
            </div>
    
        </form>
    </div>

</section>

<?php
$content = ob_get_clean();
require('views/template.php');
?>