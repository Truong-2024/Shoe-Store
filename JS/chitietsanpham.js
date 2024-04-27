document.addEventListener('DOMContentLoaded', function() {
    const minusButton = document.querySelector('.minus-btn');
    const plusButton = document.querySelector('.plus-btn');
    const quantityInput = document.querySelector('.quantity-input');
  
    minusButton.addEventListener('click', function() {
      let currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
    });
  
    plusButton.addEventListener('click', function() {
      let currentValue = parseInt(quantityInput.value);
      quantityInput.value = currentValue + 1;
    });
});