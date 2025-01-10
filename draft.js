const images = ["assets/Nike.jpg", "assets/Tracksuit.jpg", "assets/Strikot.jpg"];
let initializer = 0;

function changeImage(){
    initializer = (initializer + 1) % images.length;
    const change = document.getElementById('nikeposter');
    change.src = images[initializer];
    console.log(initializer);
}

const proceed = document.getElementById('proceed');
if(proceed){
    proceed.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/shoeMarket.php";
    });
}

const shop = document.getElementById('shop');
if (shop) {
    shop.addEventListener('click', function() {
        window.location.href = "http://localhost/CC14/shop.php";
    });
}

const home = document.getElementById('home');
if(home){
    home.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/homepage.php";
    });
}
const home1 = document.getElementById('home1');
if(home1){
    home1.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/homepage.php";
    });
}
const shop1 = document.getElementById('shop1');
if(shop1){
    shop1.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/shop.php";    
    });
}
const shop2 = document.getElementById('shop2');
if(shop2){
    shop2.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/shop.php"
    });
}

const proceed1 = document.getElementById('proceed1');
if(proceed1){
    proceed1.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/pants.php";
    });
}

const proceed2 = document.getElementById('proceed2');
if(proceed2){
    proceed2.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/clothesMarket.php";
    });
}

const Submission = document.getElementById('go');
if(Submission){
    Submission.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/homepage.php";
    });
}

function nextPage(event){
    event.preventDefault();
    console.log("submitted");


    window.location.href = "http://localhost/CC14/homepage.php";
}

const cart = document.getElementById('cart');
if(cart){
    cart.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/database.php";
    });
}

/*
document.getElementById('var').addEventListener('click', function(){
    document.getElementById('formSubmission').submit();

    window.location.href = "http://localhost/CC14/profile.php";
});
*/

const v = document.getElementById('user');
if(v){
    v.addEventListener('click', function(){
        window.location.href = "http://localhost/CC14/userProfile.php";
    });
}


const num = document.getElementById('var');
if(num){
    num.addEventListener('click', function(event){
        event.preventDefault();
        window.location.href = "http://localhost/CC14/homepage.php";
    });
}
    



/*
const enterAddress = document.getElementById('enterAddress');
const foraddress = document.getElementById('forAddress');
const addtocart = document.getElementById('addtocart');
const form = addtocart.closest('form');

addtocart.addEventListener('click', function(event){
    event.preventDefault();
    foraddress.style.display = "block";
});
*/

const arrowLeft = document.getElementById('arrowleft');
const arrowRight = document.getElementById('arrowright');
if (arrowLeft && arrowRight) {
    arrowLeft.addEventListener('click', function() {
        changeImage();
    });
    arrowRight.addEventListener('click', function() {
        changeImage();
    });
}