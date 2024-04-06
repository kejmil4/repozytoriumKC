czerwony.addEventListener("click",()=>{
    result.style.color='red'
})
niebieski.addEventListener("click",()=>{
    result.style.color='blue'
})
zielony.addEventListener("click",()=>{
    result.style.color='green'
})

let btns = document.querySelectorAll('.btns')
btns.forEach(button => {
    button.addEventListener('click',()=>{
        result.style.fontStyle = list.value;
        result.style.fontSize = `${rozmiar.value}%`;
    })
})
