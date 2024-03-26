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

if(myAccount){
    myAccount.addEventListener("click", function () {
        if (myAccountData.style.display === "block") {
            myAccountData.style.display = "none";
        } else {
            myAccountData.style.display = "block";
        }
    
        myAccount.classList.toggle("fa-plus");
        myAccount.classList.toggle("fa-minus");
    });
}

if(sellerZone){
sellerZone.addEventListener("click", function () {
    if (sellerZoneData.style.display === "block") {
        sellerZoneData.style.display = "none";
    } else {
        sellerZoneData.style.display = "block";
    }

    sellerZone.classList.toggle("fa-plus");
    sellerZone.classList.toggle("fa-minus");
});
}

if(deliveryBoy){
deliveryBoy.addEventListener("click", function () {
    if (deliveryBoyData.style.display === "block") {
        deliveryBoyData.style.display = "none";
    } else {
        deliveryBoyData.style.display = "block";
    }

    deliveryBoy.classList.toggle("fa-plus");
    deliveryBoy.classList.toggle("fa-minus");
});
}

if(quickLinks){
quickLinks.addEventListener("click", function () {
    if (quickLinksData.style.display === "block") {
        quickLinksData.style.display = "none";
    } else {
        quickLinksData.style.display = "block";
    }

    quickLinks.classList.toggle("fa-plus");
    quickLinks.classList.toggle("fa-minus");
});
}

if(contacts){
contacts.addEventListener("click", function () {
    if (contactsData.style.display === "block") {
        contactsData.style.display = "none";
    } else {
        contactsData.style.display = "block";
    }

    contacts.classList.toggle("fa-plus");
    contacts.classList.toggle("fa-minus");
});
}
