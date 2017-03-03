<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print_r('<pre>');
    var_dump($_POST);
    print_r('</pre>');
} else {
?>





    <!--<div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">-->


<div class="container">
    <div class="row">
        <h2 id="anchor_contact">Contact</h2>
        <div class="col-md-6">

            <form class="form-inline" action="" method="post" role="form">

                <label for="exampleInputCivility">Civilité</label>
                    <select class="form-control saut" id="exampleInputCivility">
                        <option>Madame</option>
                        <option>Mademoiselle</option>
                        <option>Monsieur</option>
                        <option>Transgenre</option>
                    </select>

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

            </form>
        </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="comment">Exprimez-vous</label>
                        <textarea class="form-control saut" id="comment" rows="10" placeholder="Je souhaite créer une franchise de Wild Restaurant dans le ville de _____ avec le concept de ____ car ..."></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Ajouter un fichier, si besoin</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Cela peut etre un dossier de projet ou autre business plan.</p>
                </div>

                 <button type="submit" class="btn btn-primary">Envoyer</button>



    </div>

    </div>


<?php } ?>