<ul class="nav nav-tabs" id="accountTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link" id="personal-info-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true">Редактирование профиля</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" id="article-tab" data-toggle="tab" href="#article" role="tab" aria-controls="article" aria-selected="false">Добавление статьи</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="nomination-tab" data-toggle="tab" href="#nomination" role="tab" aria-controls="nomination" aria-selected="false">Добавление номинации</a>
    </li>
</ul>
<div class="tab-content" id="accountTabContent">
    <div class="tab-pane fade " id="account" role="tabpanel" aria-labelledby="personal-info-tab">
        Редактирование профиля
    </div>
    <div class="tab-pane fade show active" id="article" role="tabpanel" aria-labelledby="article-tab">
        <!--        title, article_text, created - default / load pic-->
        <form method="post" action="/article/add">
            <div class="form-group">
                <label for="title">Название статьи</label>
                <input name="title" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="title">
            </div>
            <div class="form-group">
                <label for="text">Текст статьи</label>
                <textarea name="text" rows="10" class="form-control" id="text" placeholder="text"></textarea>
            </div>
            <div class="form-group">
                <label for="picture">Загрузить фотографию</label>
                <input type="file" class="form-control-file" id="picture" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
    <div class="tab-pane fade" id="nomination" role="tabpanel" aria-labelledby="nomination-tab">
        Добавление номинации (только администатором)
    </div>
</div>