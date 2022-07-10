document.addEventListener('DOMContentLoaded', function () {

    function load_blogs_post() {
        let blogs_news_api = "https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=5e827792c0a041a4992bc04bc322f218";

        fetch(blogs_news_api)
            .then(response => response.json())
            .then(function (data) {

                let blogs = document.querySelector('#blogs');
                let articles = data.articles.slice(0, 4);

                articles.forEach(function (article) {

                    let _col = document.createElement('div');
                    _col.className = "col-lg-3 col-md-3 col-sm-12";

                    let _blog_content = document.createElement('div');
                    _blog_content.className = "blog_content";

                    let _title = document.createElement('h3');
                    _title.innerHTML = article.title;

                    let _date_author = document.createElement('span');
                    _date_author.innerHTML = `date : ${article.publishedAt} / author : ${article.author}`;

                    let _img = document.createElement('img');
                    _img.src = article.urlToImage;
                    _img.className = 'img-thumbnail';

                    let _description = document.createElement('p');
                    _description.innerHTML = article.description;

                    let _readmore = document.createElement('a');
                    _readmore.innerHTML = 'read more';
                    _readmore.href = article.url;
                    _readmore.className = 'btn btn_orange';
                    _readmore.target = "_blank";

                    _blog_content.appendChild(_title);
                    _blog_content.appendChild(_date_author);
                    _blog_content.appendChild(_img);
                    _blog_content.appendChild(_description);
                    _blog_content.appendChild(_readmore);

                    _col.appendChild(_blog_content);
                    blogs.appendChild(_col);

                });
            });
    }
    load_blogs_post();

    let cookie_modal = new bootstrap.Modal(document.querySelector('#cookie_modal'), {keyboard: false});
    
    if(cookie_modal != null && typeof(cookie_modal) != 'undefined'){
        cookie_modal.show();
    }
});


function login_validation() {
    let result = true;
    let _loginform = document.querySelector('#login_form');

    let _email = _loginform.querySelector('#email');
    let _password = _loginform.querySelector('#password');

    if (_email.value == '' || _email.value == null) {
        _email.setAttribute('placeholder', 'Please enter your email');
        result = false;
    }

    if (_password.value == '' || _password.value == null) {
        _password.setAttribute('placeholder', 'Please enter your password');
        result = false;
    }
    return result;
}

function register_validation() {
    let result = true;
    let _registerform = document.querySelector('#register_form');

    let _user_name = _registerform.querySelector('#user_name');
    let _email = _registerform.querySelector('#email');
    let _password = _registerform.querySelector('#password');
    let _confirm_password = _registerform.querySelector('#confirm_password');


    if (_user_name.value == '' || _user_name.value == null) {
        _user_name.setAttribute('placeholder', 'Please enter your name');
        result = false;
    }

    if (_email.value == '' || _email.value == null) {
        _email.setAttribute('placeholder', 'Please enter your email');
        result = false;
    }

    if (_password.value == '' || _password.value == null) {
        _password.setAttribute('placeholder', 'Please enter your password');
        result = false;
    }
    if (_password.value != _confirm_password.value) {
        _confirm_password.value = '';
        _confirm_password.setAttribute('placeholder', 'Do not match with your password');
        result = false;
    }  
    return result;
}

document.querySelector('#register_form').addEventListener('submit',function(e){
    var response = grecaptcha.getResponse();
    if(response.length == 0) 
    { 
      alert("Please verify you are humann!"); 
      e.preventDefault();
      return false;
    }
});

function booking_validation(){
    let result = true;
    let _form = document.querySelector('#booking_form');

    let first_name = _form.querySelector('#first_name');
    let last_name = _form.querySelector('#last_name');
    let email = _form.querySelector('#email');
    let phone = _form.querySelector('#phone');
    let booking_time = _form.querySelector('#booking_time');
    

    if (first_name.value == '' || first_name.value == null) {
        first_name.setAttribute('placeholder', 'Please enter your first name.');
        result = false;
    }
    if (last_name.value == '' || last_name.value == null) {
        last_name.setAttribute('placeholder', 'Please enter your last name.');
        result = false;
    }
    if (email.value == '' || email.value == null) {
        email.setAttribute('placeholder', 'Please enter your email.');
        result = false;
    }
    if (phone.value == '' || phone.value == null) {
        phone.setAttribute('placeholder', 'Please enter your phone.');
        result = false;
    }

    if (booking_time.value == '' || booking_time.value == null) {
        booking_time.setAttribute('placeholder', 'Please insert booking time.');
        result = false;
    }
    return result;
}

function contact_us_validation(){
    let result = true;
    let _form = document.querySelector('#contact_us_form');

    let name = _form.querySelector('#name');
    let email = _form.querySelector('#email');
    let message = _form.querySelector('#message');
    

    if (name.value == '' || name.value == null) {
        name.setAttribute('placeholder', 'Please enter your name.');
        result = false;
    }
    if (email.value == '' || email.value == null) {
        email.setAttribute('placeholder', 'Please enter your email.');
        result = false;
    }
    if (message.value == '' || message.value == null) {
        message.setAttribute('placeholder', 'Please leave your message.');
        result = false;
    }

    return result;
}