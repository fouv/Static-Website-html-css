<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print_r('<pre>');
    var_dump($_POST);
    print_r('</pre>');
} else {
    ?>

    <div class="container">
        <div class="default-heading">
            <div id="anchor_contact"class="title2">CONTACT</div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form class="form-horizontal FORM" action="" method="post" role="form">


                    <div class="form-group">
                        <label for="exampleInputCivility">Civilité</label>
                        <select class="form-control saut" id="exampleInputCivility">
                            <option>Madame</option>
                            <option>Mademoiselle</option>
                            <option>Monsieur</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Prénom</label>
                        <input type="text" class="form-control saut" id="exampleInputName1" placeholder="David">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName2">Nom</label>
                        <input type="text" class="form-control saut" id="exampleInputName2" placeholder="Hasseloff">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail2" >Email</label>
                        <input type="email" class="form-control saut" id="exampleInputEmail2" placeholder="davidhasselhoff@awesome.com">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTelNumber">Téléphone</label>
                        <input type="tel" class="form-control saut" id="exampleInputTelNumber" placeholder="0677002000">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTown">Dans quelle ville souhaitez-vous devenir franchisé Wild Restaurant ?</label>
                        <input type="tel" class="form-control saut" id="exampleInputTown" placeholder="Nice / Saint Jean de Luz / Belle ile ?...">
                    </div>


            </div>




            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="comment">Exprimez-vous</label>
                    <textarea class="form-control saut" id="comment" rows="10" placeholder="Je souhaite créer une franchise de Wild Restaurant dans le ville de _____ avec le concept de ____ car ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Ajouter un fichier, si besoin</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Cela peut etre un dossier de projet ou autre business plan.</p>
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>

            </div>
            </form>

        </div>
    </div>



<?php } ?>