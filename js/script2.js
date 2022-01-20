let display = document.getElementsByClassName('maincontent');
let displayArr = Array.from(display);

let profile = document.querySelector('.allmenuxtra');
let menu = document.getElementsByClassName("allmenu");
var menuArr = Array.from(menu);
menuArr.push(profile);
// console.log(menuArr);

menuArr.forEach(e => {
    e.addEventListener('click', m => {
        displayArr.forEach(function(e){
            e.classList.add('displaynone');
            e.classList.remove('popup');
            console.log(e);
        });

        menuArr.forEach(function(img){
            img.className = 'allmenu';
            profile.className = 'allmenuxtra';
            img.firstElementChild.src = `../img/${img.id}.png`;
            // img.classList.add('displaynone');
            // console.log(img)
        });
        e.firstElementChild.src = `../img/${e.id}on.png`;
        e.classList.add('active');

        let selectedMenu = document.getElementById(`${e.id}menu`);
        selectedMenu.classList.remove('displaynone');
        selectedMenu.classList.add('popup');
        // console.log(`${e.id}menu`);

    });
});

let dashboard = document.getElementById('dashboard');

