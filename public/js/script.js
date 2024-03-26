// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.

const userIcon = document.querySelector(".user-icon");
const userImage = document.getElementById("user-image");
const userContainer = document.querySelector(".col-7.user");

const originalImageSrc = userImage.src;
const originalBorderColor = userIcon.style.borderColor;
const originalBoxShadow = (userIcon.style.boxShadow = "none");

const hoverImageSrc = "./images/icons/user-red.png";
const hoverBorderColor = "#d00906";
const hoverBoxShadow = "rgba(0, 0, 0, 0.24) 0px 3px 8px";

function handleHover() {
    userImage.src = hoverImageSrc;
    userIcon.style.borderColor = hoverBorderColor;
    userIcon.style.boxShadow = hoverBoxShadow;
}

function handleMouseOut() {
    userImage.src = originalImageSrc;
    userIcon.style.borderColor = originalBorderColor;
    userIcon.style.boxShadow = originalBoxShadow;
}

userContainer.addEventListener("mouseover", handleHover);
userContainer.addEventListener("mouseout", handleMouseOut);

document.addEventListener("DOMContentLoaded", function () {
    var header = document.getElementById("navbar");
    var headerHeight = window.getComputedStyle(header).height;
    var hiddenBox = document.getElementById("hidden-box");
    var upperBox = document.getElementById("upper-box");
    var searchBar = document.getElementById("hidden-search-bar");
    hiddenBox.style.height = headerHeight;
    upperBox.style.height = headerHeight;
    searchBar.style.height = headerHeight;
});

var menu = document.getElementById("menu");
var sidebar = document.getElementById("sidebar");
var close = document.getElementById("close-sidebar");
var searchBTN = document.getElementById("search-btn-click");
var hiddenBar = document.getElementById("hidden-search-bar");
var hideBar = document.getElementById("hide-s-bar");

menu.addEventListener("click", function () {
    sidebar.style.display = "block";
});
searchBTN.addEventListener("click", function () {
    hiddenBar.style.marginTop = "1%";
});
hideBar.addEventListener("click", function () {
    hiddenBar.style.marginTop = "-100%";
});
close.addEventListener("click", function () {
    sidebar.style.display = "none";
});

function showCategoryList(element) {
    var categoryList = document.getElementById("category-item-list");
    categoryList.style.display = "block";
}

function hideCategoryList(element) {
    var categoryList = document.getElementById("category-item-list");
    if (categoryList) {
        categoryList.style.display = "none";
    }
}

function handleClick(element) {
    var items = document.getElementsByClassName("mini-navbar-item");
    for (var i = 0; i < items.length; i++) {
        items[i].classList.remove("active");
    }

    element.classList.add("active");
}

var quickLinks = document.getElementById("quick-links");
var contacts = document.getElementById("contacts");
var myAccount = document.getElementById("my-account");
var sellerZone = document.getElementById("seller-zone");
var deliveryBoy = document.getElementById("delivery-boy");

var quickLinksData = document.querySelector(".quick-links-data");
var contactsData = document.querySelector(".contacts-data");
var myAccountData = document.querySelector(".my-account-data");
var sellerZoneData = document.querySelector(".seller-zone-data");
var deliveryBoyData = document.querySelector(".delivery-boy-data");

myAccount.addEventListener("click", function () {
    if (myAccountData.style.display === "block") {
        myAccountData.style.display = "none";
    } else {
        myAccountData.style.display = "block";
    }

    myAccount.classList.toggle("fa-plus");
    myAccount.classList.toggle("fa-minus");
});

sellerZone.addEventListener("click", function () {
    if (sellerZoneData.style.display === "block") {
        sellerZoneData.style.display = "none";
    } else {
        sellerZoneData.style.display = "block";
    }

    sellerZone.classList.toggle("fa-plus");
    sellerZone.classList.toggle("fa-minus");
});

deliveryBoy.addEventListener("click", function () {
    if (deliveryBoyData.style.display === "block") {
        deliveryBoyData.style.display = "none";
    } else {
        deliveryBoyData.style.display = "block";
    }

    deliveryBoy.classList.toggle("fa-plus");
    deliveryBoy.classList.toggle("fa-minus");
});

quickLinks.addEventListener("click", function () {
    if (quickLinksData.style.display === "block") {
        quickLinksData.style.display = "none";
    } else {
        quickLinksData.style.display = "block";
    }

    quickLinks.classList.toggle("fa-plus");
    quickLinks.classList.toggle("fa-minus");
});

contacts.addEventListener("click", function () {
    if (contactsData.style.display === "block") {
        contactsData.style.display = "none";
    } else {
        contactsData.style.display = "block";
    }

    contacts.classList.toggle("fa-plus");
    contacts.classList.toggle("fa-minus");
});





