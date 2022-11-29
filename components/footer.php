  <!--Footer-->
<footer class="page-footer cyan darken-4">
      <div class="row">
        <div class="col l6 s12 center">
          <h3 class="white-text">Ce site vous est proposé par :</h3>
          <p class="grey-text text-lighten-4">Noham COULON et Justin Killingback</p>
          <!-- Modal Trigger -->
          <a class="green waves-effect waves-light btn modal-trigger " href="#modal1">Contact</a>
        </div>
      </div>
      
      
      <!-- Modal Structure -->
       <div id="modal1" class="modal bottom-sheet">
         <div class="modal-content green-text">
           <h4>Formulaire de contact</h4>
           <p>N'hésitez pas à nous envoyer vos commentaires!</p>
            <form method="post" action="actions/mail.php">
              <label for="1">Objet</label>
              <input type="text" id="1" name="subject" placeholder="De quoi voulez-vous nous parler?">
              <br>
              <label for="msg">Commentaire</label>
              <input type="text" id="msg" name="msg" placeholder="Ecrivez un commentaire ou une question">
              <br>
              <label for="email">Votre adresse Mail</label>
              <input type="text" id="email" name="email" placeholder="L'adresse mail à laquelle nous pouvons vous répondre">
              <br>
              <input type="submit" value="Envoyer">
            </form>
         </div>
         <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Nope</a>
         </div>
        </div>
    <div class="footer-copyright">
      <div class="container">
        <span class="bepis">© 2022 Bepis group</span>
      </div>
    </div>
</footer>