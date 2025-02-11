document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("contactForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Evita la recarga de la página

        let formData = new FormData(this);

        fetch("controller/enviar.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                alert(data); // Muestra el mensaje de confirmación o error
            })
            .catch(error => {
                alert("Error, inténtelo después.");
                console.error("Error:", error);
            });
    });
});
