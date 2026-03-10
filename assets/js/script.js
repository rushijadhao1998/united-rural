(function () {
    emailjs.init("IBnO7La8M6ozR7keR");
})();

document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("contact-form");

    if (form) {

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
                'service_bcu6ovf',
                'template_itna8ff',
                this
            ).then(function () {

                Swal.fire({
                    title: "Message Sent!",
                    text: "Our team will contact you shortly.",
                    icon: "success",
                    confirmButtonColor: "#1d4ed8"
                });

                let phone = document.querySelector('[name="phone"]').value;

                fetch("send-sms.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "phone=" + phone
                });

                form.reset();

            }, function (error) {

                Swal.fire({
                    icon: "error",
                    title: "Message Failed",
                    text: "Something went wrong. Please try again later."
                });

                console.log(error);

            });

        });

    }

});