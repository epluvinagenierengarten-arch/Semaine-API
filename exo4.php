<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head> 
<body> 
    <h1>Météo actuelle </h1>


    <input type="text" id="city" placeholder="Entrerz votre ville"/>
    <button id="getWeather">Voir la météo </button>


    <div id='weather'></div>


    <script type="text/javascript">
        //evenement de click sur le bouton
        document.getElementById("getWeather").addEventListener('click',() =>
        {
            //recupere les valeurs, et affiche par defaut Nice si ça ne fonctionne pas
            const city= document.getElementById('city').value || 'Nice';
            const url =`weather.php?city=${city}`;


            fetch(url)
            .then (response => {
                if(!response.ok){
                    throw new Error('Erreur réseau ou API');
                }
               
                return response.json();
            })

            // Vérifie si la réponse est valide
            .then(data => {
                // Récupère la div pour afficher les résultats
                const weatherDiv = document.getElementById('weather');

                // récupère données ville, météo, température et humidité
                weatherDiv.innerHTML = `
                    <p><strong>Ville: </strong>${data.name}</p>
                    <p><strong>Météo: </strong>${data.weather[0].description}</p>
                    <p><strong>Température: </strong>${data.main.temp} °C </p>
                    <p><strong>Humidité: </strong>${data.main.humidity} % </p>
                `;
            })

            //affiche erreur si erreur
            .catch( error => {
                console.log(error);
                document.getElementById('weather').innerText = "Erreur lors de la récupération des données"
            })
        })
    </script>
</body>
</html>
