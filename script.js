document.addEventListener("DOMContentLoaded", function () {
    const emailForm = document.getElementById("emailForm");

    emailForm.addEventListener("submit", function (event) {
        event.preventDefault();
        const emailInput = document.querySelector("input[type='email']");
        const email = emailInput.value;

        // Hier könntest du den AJAX-Aufruf hinzufügen, um die E-Mail-Adresse zu speichern
        // und eine Bestätigungsnachricht anzuzeigen.
        // Beispiel: fetch("subscribe.php", { method: "POST", body: JSON.stringify({ email }) })
        // .then(response => response.json())
        // .then(data => {
        //     if (data.success) {
        //         alert("Vielen Dank für deine Anmeldung!");
        //     } else {
        //         alert("Es gab ein Problem bei der Anmeldung.");
        //     }
        // });

        emailInput.value = ""; // Zurücksetzen des Eingabefelds nach dem Absenden
    });
});
