<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print_r('<pre>');
    var_dump($_POST);
    print_r('</pre>');
} else {
?>

    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="" method="post" role="form">
            <legend>Formulaire de contact</legend>
             <form class="form-inline">
            <label for="exampleInputCivility">Civilité</label>
                <select class="form-control" id="exampleInputCivility">
            <option>Madame</option>
            <option>Mademoiselle</option>
            <option>Monsieur</option>
            <option>Transgenre</option>
            </select>

            <div class="form-group">
            <label for="exampleInputName1">Prénom</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="David">
            </div>

            <div class="form-group">
            <label for="exampleInputName2">Nom</label>
            <input type="text" class="form-control" id="exampleInputName2" placeholder="Hasseloff">
            </div>

             <div class="form-group">
            <label for="exampleInputEmail2">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="davidhasselhoff@awesome.com">
            </div>

            <div class="form-group">
            <label for="exampleInputTelNumber">Téléphone</label>
            <input type="tel" class="form-control" id="exampleInputTelNumber" placeholder="0677002000">
            </div>


             <div class="form-group">
            <label for="exampleInputTown">Dans quelle ville souhaitez-vous devenir franchisé Wild Restaurant ?</label>
            <input type="tel" class="form-control" id="exampleInputTown" placeholder="Nice / Saint Jean de Luz / Belle ile ?...">
            </div>


            <div class="form-group">
            <label for="exampleInputExpress">Exprimez-vous</label>
            <textarea class="form-control" id="exampleInputExpress" rows="3" placeholder="Je souhaite créer une franchise de Wild Restaurant dans le ville de _____ avec le concept de ____ car ..."></textarea>
            </div>

            <div class="form-group">
            <label for="exampleInputFile">Ajouter un fichier, si besoin</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Cela peut etre un dossier de projet ou autre business plan.</p>
            </div>

             <button type="submit" class="btn btn-primary">Submit</button>
             </form>

        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> </div>
    </div>

<?php } ?>