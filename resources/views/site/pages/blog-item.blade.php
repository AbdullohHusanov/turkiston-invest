@extends('site.layouts.main')
@section('title', __('Blog page'))

@section('content')
    <div class="blog-item">
        <div class="bg-layer"></div>
        <img src="{{Vite::asset('resources/images/icons/background/78.jpg')}}" alt="">
        <div class="container">
            <p class="blog-item-title">
                A small river named Duden flows by their place and supplies it with the necessary regelialia
            </p>
        </div>
    </div>

    <div class="container">
        <div class="flex justify-between w-fit mt-10">
            <div class="flex items-center">
                <span class="icon-news-user flex items-center"></span>
                <p class="size1 text-mute ml-1">Admin Admin</p>
            </div>
            <div class="flex items-center mx-3">
                <span class="icon-news-calendar flex"></span>
                <p class="size1 text-mute ml-1">01-01-2021</p>
            </div>
            <div class="flex items-center mx-3">
                <span class="icon-news-eye flex"></span>
                <p class="size1 text-mute ml-1">1500</p>
            </div>
        </div>


        <p class="my-5 size4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aperiam architecto asperiores
            assumenda blanditiis commodi consequuntur debitis dolorum eius eveniet exercitationem expedita facere illum
            in itaque iure iusto labore laborum natus, nemo obcaecati odio officiis omnis perspiciatis qui quo
            recusandae tempora ullam unde. Adipisci culpa, cumque debitis ea eaque enim error exercitationem explicabo
            inventore labore magnam magni omnis quasi quisquam quod ratione reprehenderit sequi tenetur ullam unde velit
            vero vitae voluptas. Amet asperiores quasi sapiente sed? Dolorum hic modi nesciunt pariatur, rem repellendus
            saepe! Animi asperiores aspernatur corporis cupiditate delectus dignissimos doloremque doloribus ducimus est
            facere facilis inventore, ipsa, itaque iusto laborum mollitia necessitatibus nihil nisi nulla, optio
            pariatur quia quos similique tenetur unde vel velit voluptate. Ad amet earum est, exercitationem facere
            inventore ipsum laborum libero natus reprehenderit unde vitae voluptas? Accusantium autem delectus dolores
            ea earum et facere fuga fugit illum impedit incidunt iure labore magnam perferendis quam quibusdam quis quod
            ratione reprehenderit sapiente similique, soluta tempora tempore tenetur unde! Accusamus asperiores autem
            consequatur deleniti, ex excepturi fugiat fugit harum laudantium magnam minus nam nesciunt non quaerat quam
            quia sed, ullam, velit veniam vitae. Ad aliquid animi beatae commodi deserunt earum facilis id iste
            laboriosam magnam modi non praesentium quibusdam quod ratione reiciendis rem saepe vero voluptate,
            voluptatem. Dolores dolorum est maiores nobis pariatur ullam unde. Accusamus adipisci amet assumenda aut
            commodi deleniti dolores eaque illo inventore laboriosam maxime nam nobis numquam officiis placeat
            praesentium provident quam quia quos recusandae reprehenderit rerum sint sit unde, voluptas. Adipisci alias
            animi aperiam architecto atque aut beatae consequuntur, cumque cupiditate dignissimos dolores doloribus eius
            enim ex expedita fugit incidunt inventore iste laudantium magnam minima nihil nobis odit officiis
            perferendis possimus quia quibusdam quidem reiciendis repudiandae saepe sapiente sunt suscipit tempore
            temporibus totam ullam. Deleniti doloremque eos est nemo, unde voluptatum!
        </p>
    </div>

    <div class="container">
        <div class="comments">
            <div class="flex justify-between">
                <p>2 Комментариев</p>
                <a href="#">Войти</a>
            </div>
        </div>

        <div class="flex ">
            <div class="avatar"><span>A</span></div>
            <textarea class="w-full" placeholder="Присоединиться к обсуждению..."></textarea>
        </div>
        <div class="flex justify-between float-right mt-3">
            <button class="comment-btn">Comment</button>
        </div>


        <div class="comments-list">
            <div class="comment-item">
                <div class="avatar"><span>Ю</span></div>
                <div class="comment-info">
                    <p class="comment-name">Юрий Смирнов</p>
                    <p class="size1">4 месяца назад</p>
                    <p>Наконец, полезное и долгожданное обновление. Благодарю 🙏</p>

                    <div class="flex">
                        <span class="voting">
                            <svg class="like-button" width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                            <p>20</p>
                        </span>
                        <span class="voting">
                            <svg class="dislike-button" width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                            <p>20</p>
                        </span>
                        <p>Ответить</p>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <div class="avatar"><span>A</span></div>
                <div class="comment-info">
                    <p class="comment-name">Anton Ivann </p>
                    <p class="size1">4 месяца назад</p>
                    <p>Курутое обновление, НО, опять всё порезали первым двум тарифам :(((</p>

                    <div class="flex">
                        <span class="voting">
                            <svg class="like-button" width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                            <p>20</p>
                        </span>
                        <span class="voting">
                            <svg class="dislike-button" width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                            <p>20</p>
                        </span>
                        <p>Ответить</p>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <div class="avatar"><span>Ю</span></div>
                <div class="comment-info">
                    <p class="comment-name">Юрий Смирнов</p>
                    <p class="size1">4 месяца назад</p>
                    <p>Наконец, полезное и долгожданное обновление. Благодарю 🙏</p>

                    <div class="flex">
                        <span class="voting">
                            <svg class="like-button" width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                            <p>20</p>
                        </span>
                        <span class="voting">
                            <svg class="dislike-button" width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                            <p>20</p>
                        </span>
                        <p>Ответить</p>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <div class="avatar"><span>Ю</span></div>
                <div class="comment-info">
                    <p class="comment-name">Юрий Смирнов</p>
                    <p class="size1">4 месяца назад</p>
                    <p>Наконец, полезное и долгожданное обновление. Благодарю 🙏</p>

                    <div class="flex">
                        <span class="voting">
                            <svg class="like-button" width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                            <p>20</p>
                        </span>
                        <span class="voting">
                            <svg class="dislike-button" width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                            <p>20</p>
                        </span>
                        <p>Ответить</p>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                @include('site.components.pagination')
            </div>
        </div>
    </div>

@endsection
