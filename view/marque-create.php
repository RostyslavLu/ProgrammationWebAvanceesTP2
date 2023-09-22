{{ include('header.php', {title: 'Create marque'}) }}
    <main>
        <form action="{{path}}marque/store" method="post">
            <fieldset>
                <label>Marque nom:
                    <input type="text" name="nom">
                </label>
 
                <input type="submit" value="Enregistrer">
            </fieldset>
        </form>
    </main>
</body>
</html>