document.getElementById('search-form').addEventListener('submit', async function(event) {
    event.preventDefault();
    
    const term = document.getElementById('search-term').value;
    console.log('Searching for:', term); // Debugging log
    const images = await searchImages(term);
    displayImages(images);
});

async function searchImages(term) {
    try {
        const response = await fetch(`https://api.unsplash.com/search/photos?query=${term}`, {
            headers: {
                Authorization: 'Client-ID 7nU8ef9Mia3BfgZLoZ0vQMPSRqmbMSZj48eQG75vYDY'
            }
        });
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        return data.results;
    } catch (error) {
        console.error('Error fetching images:', error); // Debugging log
    }
}

function displayImages(images) {
    const imageList = document.getElementById('image-list');
    imageList.innerHTML = '';

    if (images && images.length > 0) {
        images.forEach(image => {
            const img = document.createElement('img');
            img.src = image.urls.small;
            img.alt = image.alt_description;
            imageList.appendChild(img);
        });
    } else {
        imageList.innerHTML = '<p>No images found</p>';
    }
}
