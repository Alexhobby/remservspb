document.addEventListener('DOMContentLoaded',function(){
const btn = document.getElementsByClassName('btn');
const modal = document.getElementById('myModal');
const closebtn = document.getElementsByClassName('closebtn');
const form = document.getElementById('form');
const check = document.getElementsByClassName('checkbox__input');
const baton = document.getElementsByClassName('form__button');
console.log(closebtn[0]);
closebtn[0].addEventListener('click', function(e){
    modal.style.display = 'none';
});

[].forEach.call(btn, (el) => {
    el.addEventListener('click', function(e){
       modal.style.display = "block";
    });
});



    check[0].addEventListener('change', function (e) {
        if (check[0].checked == true ) {
            
            baton[0].removeAttribute('disabled','disabled');
            baton[0].style.backgroundColor = 'lawngreen';
        } else {
            baton[0].setAttribute('disabled','disabled');
            baton[0].style.backgroundColor = 'grey';
            alert('Необходимо дать согласие на обработку персональных данных');
        }
    });




form.addEventListener('submit', formSend);

async function formSend(e){
    e.preventDefault();
    form.classList.add('_sending');
    let response = await fetch('sendmail.php',{
        method:'POST',
        body: new FormData(form)
    });
    if(response.ok){
        let resault = await response.json();
        alert(resault.message);
        form.reset();
        form.classList.remove('_sending');
    }else{
        alert("Ошибка сервера - повторите позже");
        form.classList.remove('_sending');
    }
}
    
   










});