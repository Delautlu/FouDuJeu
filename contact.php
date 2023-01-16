




<fieldset>
                    <legend>Vos coordonnées</legend><br>
                    <label for="nom">Votre nom*:</label><input type="text" name="nom" id="nom" >
                    <span id="alert_name"></span>
        <br>

                    <label for="votre_prenom">Votre prénom*:</label><input type="text" name="prenom" id="prenom">
                    <span id="alert_pre"></span>
        <br>

                    <label for="sexe">Sexe*</label>
                        <input type="radio" name="sexe" value="féminin" class="fem" id="sexe1">féminin
                        <input type="radio" name="sexe" value="masculin" class="men" id="sexe2">masculin
                        <span id="sx_alert"></span>  
        <br>

                    <label for="date">Date de naissance*:</label><input type="date" name="ddn" id="date" >
                    <span id="alert_dateNaissance"></span>
        <br>

                    <label for="code_postal">Code postal*:</label><input type="text" name="code postal" id="code_postal">
                    <span id="alert_cdp"></span>
        <br>

                    <label for="adresse">Adresse:</label><input type="text" name="adresse" id="adresse">
        <br>
                    <label for="ville">Ville:</label><input type="text" name="ville" id="ville">
        <br>
        
                    <label for="mail">Email*:</label><input type="text" name="mail" id="email" >
                    <span id="alert_ml"></span>

                </fieldset>
                <fieldset>
                    <legend>Votre demande</legend><br>
                    <label for="sujet">Sujet*</label>
                    <select id="sujet"><span id="sj"></span>
                        <option value="Veuillez sélectionner un sujet">Veuillez sélectionner un sujet</option>
                        <option value="Mes commandes">Mes commandes</option>
                        <option value="Question sur un produit">Question sur un produit</option>
                        <option value="Réclamation">Réclamation</option>
                        <option value="Autres">Autres</option>
                    </select>
        <br>
                    <label for="votre_question">Votre question*:</label><input type="text" name="votre question" id="votre_question" size="40" >
                    <span id="ques"></span>
                </fieldset>

                <input type="checkbox" name="accepte" id="coche">
                <label for="accepte">* J'accepte le traitement informatique de ce formulaire</label>
                <span id="acce"></span>
                <br>
        
                <input type="submit" name="but1" id="bt1" value="Envoyer">
		        <input type="reset" name="but2" id="bt2" value="annuler">
            </section> 
        </form>
    </article>