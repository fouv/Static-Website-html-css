<div id="anchor_contact" class="container">
    <div class="default-heading">
        <div id="anchor_contact" class="title2">CONTACT</div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form class="form-horizontal FORM">
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
                        <label for="exampleInputEmail2">Email</label>
                        <input type="email" class="form-control saut" id="exampleInputEmail2"
                               placeholder="davidhasselhoff@awesome.com">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTelNumber">Téléphone</label>
                        <input type="tel" class="form-control saut" id="exampleInputTelNumber"
                               placeholder="0677002000">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTown">Dans quelle ville souhaitez-vous devenir franchisé Wild
                            Restaurant ?</label>
                        <input type="tel" class="form-control saut" id="exampleInputTown"
                               placeholder="Nice / Saint Jean de Luz / Belle ile ?...">
                    </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="comment">Exprimez-vous</label>
                    <textarea class="form-control saut" id="comment" rows="10"
                              placeholder="Je souhaite créer une franchise de Wild Restaurant dans le ville de _____ avec le concept de ____ car ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Ajouter un fichier, si besoin</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Cela peut etre un dossier de projet ou autre business plan.</p>
                </div>

            </div>
            </form>
            <button class="btn btn-primary" id="BOUTON">Envoyer</button>
        </div>
        <div>
            <a class="js-scrollTo anchor" href="#anchor_menu"><img src="/images/return.png" alt="retour haut" width="50rem"></a>
        </div>
    </div>

    <!--modal -->
    <div id="MERCI" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header POPUP">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="fa fa-check" aria-hidden="true"></i> Félicitations !</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Votre formulaire a été envoyé</p>
                </div>
            </div>
        </div>
    </div>
