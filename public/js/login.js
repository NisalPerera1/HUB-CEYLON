//const usePhone = document.getElementById("use-phone");
//const useEmail = document.getElementById("use-email");

//const loginPhone = document.querySelector("#login-phone");
//const loginEmail = document.querySelector("#login-email");

//usePhone.addEventListener("click", function () {
//    loginEmail.style.display = "none";
//    loginPhone.style.display = "block";
//});
//useEmail.addEventListener("click", function () {
//    loginEmail.style.display = "block";
//    loginPhone.style.display = "none";
//});


document.addEventListener("DOMContentLoaded", function () {
    toggleLoginSections();
    document.getElementById("default").addEventListener("change", function () {
        toggleLoginSections();
    });

    function toggleLoginSections() {
        var checkbox = document.getElementById("default");
        var loginEmail = document.getElementById("login-email");
        var loginPhone = document.getElementById("login-phone");

        if (checkbox.checked) {
            loginEmail.style.display = "block";
            loginPhone.style.display = "none";
        } else {
            loginEmail.style.display = "none";
            loginPhone.style.display = "block";
        }
    }
});

var loginContent = document.getElementById("login-content");
var loginHeight = window.getComputedStyle(loginContent).height;
var loginImage = document.getElementById("login-image");
loginImage.style.height = loginHeight;


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
