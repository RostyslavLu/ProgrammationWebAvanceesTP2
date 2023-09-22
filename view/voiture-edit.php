{{ include('header.php', {title: 'Modifier voiture'}) }}
    <main>
        <form action="{{path}}voiture/update" method="post">
            <fieldset>
                <input type="hidden" name="id" value="{{voiture.id}}">
                <label >Année fabrication:
                    <input type="number" name="annee" value="{{voiture.annee}}">
                </label>
                <label >Prix par jour:
                    <input type="number" name="prix_par_jour" value="{{voiture.prix_par_jour}}">
                </label>
                <label >Disponibilité:
                    {% if voiture.disponible == 1 %}
                    <select name="disponible">
                        <option value="1" selected>Oui</option>
                        <option value="0" >Non</option>
                    </select>
        
                    {% else %}
                    <select name="disponible">
                        <option value="1">Oui</option>
                        <option value="0" selected>Non</option>
                    </select>
                    {% endif %}
                </label>
                <label> Marque:
                    <select name="marqueId">
                        <option selected></option>
                        {% for marque in marques %}
                        <option value="{{ marque.id }}" {% if marque.id == voiture.marqueId %} selected {% endif %}>{{ marque.nom }}</option>
                        {% endfor %}
                    </select>
                </label>
                <input class="bouton" type="submit" value="Modifier">
        
        
        </form>
        <form action="{{path}}voiture/destroy" method="post">
            <input  type="hidden" name="id" value="{{voiture.id}}">
            <input class="bouton" type="submit" value="Effacer">
        </form>
        </fieldset>
    </main>
</body>
</html>