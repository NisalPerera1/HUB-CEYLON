// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.


function ImageMagnifier(e) {
    var ImageContainer = document.getElementById('product-image-container');
    var ProductImage = document.querySelector('#product-image-img');

    const rect = ImageContainer.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    ProductImage.style.transformOrigin = `${x}px ${y}px`;
    ProductImage.style.transform = "scale(2)";
}

function ResetImageScale() {
    var ProductImage = document.querySelector('#product-image-img');
    ProductImage.style.transformOrigin = "initial";
    ProductImage.style.transform = "scale(1)";
}

document.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('navbar');
    var headerHeight = window.getComputedStyle(header).height;
    var upperBox = document.getElementById('upper-box');
    upperBox.style.height = headerHeight;
});


var counterElement = document.getElementById("counter");

var count = 1;

function updateCounter() {
    counterElement.textContent = count;
}

function decrement() {
    if (count > 1) {
        count--;
        updateCounter();
    }
}

function increment() {
    count++;
    updateCounter();
}


document.addEventListener("DOMContentLoaded", function () {
    var wrapperItems = document.querySelectorAll(".wrapper-item");

    wrapperItems.forEach(function (item) {
        item.addEventListener("click", function () {
            wrapperItems.forEach(function (item) {
                item.classList.remove("active");
            });

            this.classList.add("active");

            var newImageSrc = this.querySelector(".thumbnail").getAttribute("src");

            document.getElementById("product-image-img").setAttribute("src", newImageSrc);
        });
    });
});
