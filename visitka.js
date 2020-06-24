window.addEventListener('scroll', updateScroll);


function updateScroll() {
    let header = document.getElementById('header');
    let service = document.getElementById('service');
    let target = window.scrollY;
    if(target==0) {
        header.style.opacity = "1";
        header.style.backgroundColor = "";
        header.style.height = "70px";
    }else if (target>service.offsetTop-500){
        header.style.backgroundColor = "#DC143C";
        header.style.height = "70px";
        header.style.opacity = '0.4';
        
    }else {
        header.style.backgroundColor = "#8B0000";
        header.style.height = target/4+"px";
        header.style.opacity = "1";
    }
}
















function sendDate() {
let elemname = document.getElementById("name");
    let elememail = document.getElementById("email");
    let elemquestion = document.getElementById("question");
    let elemnumber = document.getElementById("number");

    Email.send({
        Host: "smtp.gmail.com",
        Username : "taxoservis907856@gmail.com",
        Password : "taxo907856",
        To : 'artemiicherepaha92@gmail.com',
        From : "taxoservis907856@gmail.com",
        Subject : "Вопрос от пользователя",
        Body : "Имя ="+elemname.value+"\n\r       email ="+elememail.value+"\n         Вопрос ="+elemquestion.value+"\n         Телефон ="+elemnumber.value
    }).then (
        message => alert (" почта успешно отправлена ​​")
    );

}