<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <div class="checkout-container">
            <h2>Checkout</h2>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="SHAHADAT HOSSAIN" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="oliver@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="13 Fitzroy Tce" required>
                </div>
                <div class="form-group">
                    <label for="credit-card">Credit Card:</label>
                    <input type="text" id="credit-card" name="credit-card" value="6565303553" required>
                </div>
                <div class="form-group">
                    <label for="delivery-options">Delivery Options:</label>
                    <select id="delivery-options" name="delivery-options">
                        <option value="20.00">Express Delivery - $20.00</option>
                        <option value="10.00">Standard Delivery - $10.00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="special-instructions">Special Instructions:</label>
                    <textarea id="special-instructions" name="special-instructions"></textarea>
                </div>
                <div class="order-summary">
                    <h3>Order Summary</h3>
                    <p>Product Price: <span id="product-price">$0.00</span></p>
                    <p>Delivery Fee: <span id="delivery-fee">$0.00</span></p>
                    <p>Total Amount: <span id="total-amount">$0.00</span></p>
                </div>
                <button type="submit" class="btn">Place Order</button>
            </form>
        </div>
    </main>
    <?php include '../includes/footer.php'; ?>

    <!-- Add JavaScript code here -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const productPrices = [29.99, 25.99, 27.99, 49.99, 39.99]; // Example product prices
        const deliveryFee = 20.00;
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
    </script>
</body>
</html>
