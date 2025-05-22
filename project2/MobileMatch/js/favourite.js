// Fetch the user's favourite devices data from the server
fetch('getFavourites.php')
    .then(response => response.json())
    .then(favourites => {
        // Display the favourite devices on the page
        const favDiv = document.getElementById('fav');
        favourites.forEach(favourite => {
            const deviceDiv = document.createElement('div');
            deviceDiv.className = 'device';
            const img = document.createElement('img');
            img.src = favourite.image;
            img.alt = favourite.name;
            const h3 = document.createElement('h3');
            h3.textContent = favourite.name;
            deviceDiv.appendChild(img);
            deviceDiv.appendChild(h3);
            favDiv.appendChild(deviceDiv);
        });
    })
    .catch(error => {
        console.error('Error fetching favourite devices:', error);
    });
