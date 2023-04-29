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
                </div>
            </div>
        </div>
    </div>

@endsection
