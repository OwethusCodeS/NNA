// js/orders.js
document.addEventListener("DOMContentLoaded", function() {
    loadOrderStatus();
});

function loadOrderStatus() {
    var orderStatusDiv = document.getElementById('orderStatus');
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../api/get_orders.php', true);
    xhr.onload = function() {
        if (this.status == 200) {
            orderStatusDiv.innerHTML = this.responseText;
        }
    };
    xhr.send();
}
