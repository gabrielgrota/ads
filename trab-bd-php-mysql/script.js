document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll(".menu-item");
    const cart = document.getElementById("cart");
    const totalElement = document.getElementById("total");
    var checkoutButton = document.getElementById("checkout");
    const xCircle = `<i style="color: #d00000;" class="bi bi-x-circle remove-from-cart"></i>`;

    const itemsInCart = {};

    menuItems.forEach(function(item) {
        const addButton = item.querySelector(".add-to-cart");
        addButton.addEventListener("click", function() {
            const name = item.getAttribute("data-name");
            const price = parseFloat(item.getAttribute("data-price"));

            if (itemsInCart[name]) {
                itemsInCart[name].quantity++;
            } else {
                itemsInCart[name] = {
                    price: price,
                    quantity: 1
                };
            }

            updateCart();
        });
    });

    cart.addEventListener("click", function(event) {
        if (event.target.classList.contains("remove-from-cart")) {
            const item = event.target.closest(".cart-item");
            const name = item.getAttribute("data-name");

            if (itemsInCart[name]) {
                itemsInCart[name].quantity--;
                if (itemsInCart[name].quantity === 0) {
                    delete itemsInCart[name];
                }
                updateCart();
            }
        }
    });

    function updateCart() {
        let total = 0;
        cart.innerHTML = "";

        for (const itemName in itemsInCart) {
            const item = itemsInCart[itemName];
            const itemDiv = document.createElement("div");
            itemDiv.classList.add("cart-item");
            itemDiv.setAttribute("data-name", itemName);
            itemDiv.innerHTML = `${itemName} - $${item.price.toFixed(2)} x ${item.quantity}
                <button type="button" style="border: none; background: none;" class="remove-from-cart"> ${xCircle} </a>
                `;
            cart.appendChild(itemDiv);

            total += item.price * item.quantity;
        }

        totalElement.textContent = total.toFixed(2);
    }

    checkoutButton.addEventListener("click", function() {
        // Enviar pedido ao servidor (pode ser implementado em PHP)
        var total = parseFloat(totalElement.textContent);
        alert("Pedido finalizado. Total: $" + total.toFixed(2));
    });
});

function finalizado(){
    alert(`Processando pagamento, aguarde alguns segundos...`);
    alert("Pagamento realizado com sucesso!");
    alert("Seu pedido está sendo preparado e chegará em até 40 minutos.");
}