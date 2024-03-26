//const usePhone = document.getElementById("use-phone");
//const useEmail = document.getElementById("use-email");

//const registerPhone = document.querySelector("#register-phone");
//const registerEmail = document.querySelector("#register-email");

//usePhone.addEventListener("click", function () {
//    registerEmail.style.display = "none";
//    registerPhone.style.display = "block";
//});
//useEmail.addEventListener("click", function () {
//    registerEmail.style.display = "block";
//    registerPhone.style.display = "none";
//});
document.addEventListener("DOMContentLoaded", function () {
    toggleLoginSectionsRegister();
    document.getElementById("default").addEventListener("change", function () {
        toggleLoginSectionsRegister();
    });

    function toggleLoginSectionsRegister() {
        var checkbox = document.getElementById("default");
        var registerEmail = document.getElementById("register-email");
        var registerPhone = document.getElementById("register-phone");

        if (checkbox.checked) {
            registerEmail.style.display = "block";
            registerPhone.style.display = "none";
        } else {
            registerEmail.style.display = "none";
            registerPhone.style.display = "block";
        }
    }
});

var registerContent = document.getElementById("register-content");
var registerHeight = window.getComputedStyle(registerContent).height;
var registerImage = document.getElementById("register-image");
registerImage.style.height = registerHeight;

const input = document.querySelector("#phone");
window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: callback => {
        fetch("https://ipapi.co/json")
            .then(res => res.json())
            .then(data => callback(data.country_code))
            .catch(() => callback("us"));
    },
}); 

document.getElementById('acceptButton').addEventListener('click', function () {
    document.getElementById('termsCheckbox').checked = true;
});

document.getElementById('declineButton').addEventListener('click', function () {
    document.getElementById('termsCheckbox').checked = false;
});

