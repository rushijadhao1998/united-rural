(function () {
    emailjs.init("IBnO7La8M6ozR7keR");
})();

document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("contact-form");

    if (!form) return;

    form.addEventListener("submit", function (e) {

        e.preventDefault();

        Swal.fire({
            title: "Sending Message...",
            text: "Please wait while we submit your request",
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        emailjs.sendForm(
            "service_bcu6ovf",
            "template_itna8ff",
            form
        ).then(function () {

            let phone = form.querySelector('[name="phone"]').value;
            let name = form.querySelector('[name="name"]').value;

            // SMS request
            fetch("send-sms.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: `phone=${encodeURIComponent(phone)}&name=${encodeURIComponent(name)}`
            })
            .then(response => response.text())
            .then(data => {
                console.log("SMS Response:", data);
            })
            .catch(error => {
                console.error("SMS Error:", error);
            });

            Swal.fire({
                title: "Message Sent!",
                text: "Our team will contact you shortly.",
                icon: "success",
                confirmButtonColor: "#1d4ed8"
            });

            form.reset();

        }).catch(function (error) {

            Swal.fire({
                icon: "error",
                title: "Message Failed",
                text: "Something went wrong. Please try again later."
            });

            console.log(error);

        });

    });

});