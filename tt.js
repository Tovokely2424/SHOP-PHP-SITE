// Sélectionnez tous les champs d'entrée de quantité
const quantityInputs = document.querySelectorAll('.cart_quantity_input');

// Ajoutez un gestionnaire d'événements pour chaque champ d'entrée
quantityInputs.forEach(input => {
    input.addEventListener('change', () => {
        // Obtenez le prix unitaire de l'article (supposez que le prix soit stocké dans une classe price)
        const unitPrice = parseFloat(input.closest('tr').querySelector('.price').textContent);

        // Obtenez la nouvelle quantité entrée par l'utilisateur
        const newQuantity = parseInt(input.value);

        // Calculez le nouveau prix total pour cet article
        const newTotalPrice = unitPrice * newQuantity;

        // Mettez à jour le prix total affiché pour cet article (supposez que le prix total soit stocké dans une classe cart_total_price)
        input.closest('tr').querySelector('.cart_total_price').textContent = '$' + newTotalPrice.toFixed(2);

        // Appelez une fonction pour mettre à jour le prix total global
        updateTotalPrice();
    });
});

// Fonction pour mettre à jour le prix total global
function updateTotalPrice() {
    let totalPrice = 0;

    // Sélectionnez tous les prix totaux des articles
    const totalPrices = document.querySelectorAll('.cart_total_price');

    // Calculez le prix total global en additionnant les prix totaux de tous les articles
    totalPrices.forEach(priceElement => {
        totalPrice += parseFloat(priceElement.textContent.replace('$', ''));
    });

    // Mettez à jour l'élément HTML qui affiche le prix total global
    const totalPriceElement = document.getElementById('totalPrice');
    totalPriceElement.textContent = '$' + totalPrice.toFixed(2);
}
