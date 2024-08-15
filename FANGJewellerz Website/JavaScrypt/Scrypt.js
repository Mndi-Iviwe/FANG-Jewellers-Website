let cart = [];
let totalPrice = 0;

function addToCart(productName, productPrice) {
    cart.push({ name: productName, price: productPrice });
    totalPrice += productPrice;
    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';
    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - $${item.price.toFixed(2)}`;
        cartItems.appendChild(li);
    });

    document.getElementById('total-price').textContent = totalPrice.toFixed(2);
}

function toggleCart() {
    const cartContainer = document.getElementById('cart-container');
    const toggleBtn = document.getElementById('toggle-cart');
    if (cartContainer.classList.contains('collapsed')) {
        cartContainer.classList.remove('collapsed');
        toggleBtn.classList.remove('collapsed');
    } else {
        cartContainer.classList.add('collapsed');
        toggleBtn.classList.add('collapsed');
    }
}


// Array of image URLs
const images = [
    'Images/Toothgem-kit.jpg',
    'Images/toothgem-kit2.jpg'
];

let currentIndex = 0;

// Function to change the image
function changeImage() {
    const imgElement = document.getElementById('slideshow');
    currentIndex = (currentIndex + 1) % images.length;
    imgElement.src = images[currentIndex];
}

// Change image every 3 seconds (3000 milliseconds)
setInterval(changeImage, 3000);