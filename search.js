// js/search.js
function searchProducts() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var productList = document.getElementById('productList');
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../api/search_products.php?query=' + input, true);
    xhr.onload = function() {
        if (this.status == 200) {
            productList.innerHTML = this.responseText;
        }
    };
    xhr.send();
}
