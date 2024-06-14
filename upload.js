// js/upload.js
document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData();
    formData.append('proof', document.getElementById('proof').files[0]);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../api/upload_proof.php', true);
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById('uploadStatus').innerHTML = this.responseText;
        } else {
            document.getElementById('uploadStatus').innerHTML = 'Error uploading file.';
        }
    };
    xhr.send(formData);
});
