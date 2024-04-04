function czerwony() {
    document.querySelector('#tx1').style.color = 'red';
    ustawRozmiar();
}

function zielony() {
    document.querySelector('#wynik').style.color = 'green';
    ustawRozmiar();
}

function niebieski() {
    document.querySelector('#tx1').style.color = 'blue';
    ustawRozmiar();
}

const rozmiar = document.querySelector('#num');
const lista = document.querySelector('#lista');

let przycisnietyKlawisz = document.querySelectorAll('button[type="submit"]');

Array.from(przycisnietyKlawisz).forEach(element => {
        element.addEventListener('click', ustawRozmiar);
});

function ustawRozmiar() {
document.querySelector('#tx1').style.fontSize = `${num.value}%`;
document.querySelector('#tx1').style.fontStyle = lista.value;
}
