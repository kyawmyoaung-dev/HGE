document.addEventListener('DOMContentLoaded', function () {

    let blogs_news_api = "https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=5e827792c0a041a4992bc04bc322f218";

    fetch(blogs_news_api)
        .then(response => response.json())
        .then(function (data) {

            let blogs = document.querySelector('#blogs');
            console.log(blogs);
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
                _readmore.target ="_blank";
                
                _blog_content.appendChild(_title);
                _blog_content.appendChild(_date_author);
                _blog_content.appendChild(_img);
                _blog_content.appendChild(_description);
                _blog_content.appendChild(_readmore);

                _col.appendChild(_blog_content);
                blogs.appendChild(_col);

            });
        });

});