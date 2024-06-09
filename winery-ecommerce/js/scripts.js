document.addEventListener('DOMContentLoaded', function() {
    const productPrices = [29.99, 25.99, 27.99, 49.99, 39.99]; // Example product prices
    const productQuantityInputs = document.querySelectorAll('.product-quantity');
    const deliveryOptions = document.querySelector('#delivery-options');
    const productPriceElement = document.querySelector('#product-price');
    const deliveryFeeElement = document.querySelector('#delivery-fee');
    const totalAmountElement = document.querySelector('#total-amount');

    function calculateTotal() {
        let totalProductPrice = 0;
        productQuantityInputs.forEach((input, index) => {
            const quantity = parseInt(input.value) || 0;
            totalProductPrice += quantity * productPrices[index];
        });
        const selectedDeliveryFee = parseFloat(deliveryOptions.value) || 0;
        const totalAmount = totalProductPrice + selectedDeliveryFee;

        productPriceElement.textContent = `$${totalProductPrice.toFixed(2)}`;
        deliveryFeeElement.textContent = `$${selectedDeliveryFee.toFixed(2)}`;
        totalAmountElement.textContent = `$${totalAmount.toFixed(2)}`;
    }

    productQuantityInputs.forEach(input => {
        input.addEventListener('input', calculateTotal);
    });

    deliveryOptions.addEventListener('change', calculateTotal);

    calculateTotal(); // Initial calculation
});
