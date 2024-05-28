document.getElementById('search-form').addEventListener('submit', async function(event) {
    event.preventDefault();
    
    const term = document.getElementById('search-term').value;
    const images = await searchImages(term);
    displayImages(images);
});

async function searchImages(term) {
    const response = await fetch(`https://api.unsplash.com/search/photos?query=${term}`, {
        headers: {
            Authorization: 'Client-ID 7nU8ef9Mia3BfgZLoZ0vQMPSRqmbMSZj48eQG75vYDY'
        }
    });
    const data = await response.json();
    return data.results;
}

function displayImages(images) {
    const imageList = document.getElementById('image-list');
    imageList.innerHTML = '';

    images.forEach(image => {
        const img = document.createElement('img');
        img.src = image.urls.small;
        img.alt = image.alt_description;
        imageList.appendChild(img);
    });
}
