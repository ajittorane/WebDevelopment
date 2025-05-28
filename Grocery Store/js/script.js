let navbar = document.querySelector('.header .flex .navbar');
let profile = document.querySelector('.header .flex .profile');

document.querySelector('#menu-btn').onclick = () => {
   navbar.classList.toggle('active');
   profile.classList.remove('active');
};

document.querySelector('#user-btn').onclick = () => {
   profile.classList.toggle('active');
   navbar.classList.remove('active');
};

window.onscroll = () => {
   profile.classList.remove('active');
   navbar.classList.remove('active');
};




function updatePrice(select) {
   const form = select.closest('form');
   const priceSpan = form.querySelector('.price-value');
   const hiddenInput = form.querySelector('.hidden-price');
   const basePrice = parseFloat(priceSpan.dataset.price);
   const unitValue = parseInt(select.value); // 100 = kg, 50 = 500g, 25 = 250g

   const newPrice = (basePrice * unitValue / 100).toFixed(2);

   // Update price display
   priceSpan.textContent = newPrice;

   // Update hidden input for form submission
   hiddenInput.value = newPrice;
}

