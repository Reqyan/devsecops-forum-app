@extends('posts.layouts.base')
@section('title', 'Detail Posts')
@section('content')
    <section class="header-descriptin329">
        <div class="container">
            <h3>Post Details</h3>
            <ol class="breadcrumb breadcrumb839">
                <li><a href="#">Home</a></li>
                <li><a href="#">Post Details</a></li>
                <li class="active">This Is My first Question</li>
            </ol>
        </div>
    </section>
    <section class="main-content920">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="post-details">
                        <div class="details-header923">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="post-title-left129">
                                        <h3>{{ $post->title }} </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-details-info1982">
                            <p>{!! $post->content !!}</p>

                            <hr>
                            <div class="post-footer29032">
                                <div class="l-side2023">
                                    <i class="fa fa-folder folder2"> {{ $post->category }}</i>
                                    <i class="fa fa-clock-o clock2">
                                        {{ $post->created_at->format('j F Y') }}</i> <a href="#">
                                        <i class="fa fa-commenting commenting2"> 5 answer</i></a>
                                    <i class="fa fa-user user2"> {{ $post->user->name }}</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list12993">
                        <div class="container">
                            <div class="row">
                                <div class="comments-container">
                                    <ul id="comments-list" class="comments-list">
                                        @foreach ($post->comments as $c)
                                            <li>
                                                <div class="comment-main-level">
                                                    <!-- Avatar -->
                                                    <div class="comment-avatar"><img
                                                            src="https://e7.pngegg.com/pngimages/108/97/png-clipart-anonymous-desktop-anonymity-advertising-anonymous-emblem-logo.png"
                                                            alt=""></div>
                                                    <!-- Contenedor del Comentario -->
                                                    <div class="comment-box">
                                                        <div class="comment-head">
                                                            <h6 class="comment-name"><a
                                                                    href="#">{{ $c->user->name }}</a></h6>
                                                            <span><i class="fa fa-clock-o"> January 15 ,
                                                                    2014 at 10:00 pm</i></span> <i class="fa fa-reply"></i>
                                                            <i class="fa fa-heart"></i>
                                                        </div>
                                                        <div class="comment-content">{!! $c->content !!}</div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="comment289-box" method="POST">
                        @csrf()
                        <input type="text" style="display: none" name="post_id" value="{{ $post->id }}">
                        {{-- <input type="text" style="display: none" name="user_id" value="{{ Auth::id() }}"> --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post9320-box">

                                    <textarea id="txtEditor" name="content" class="comment-input219882"
                                        style="padding: 10px 10px; margin: 0 0 0 115px; width: 78%;"></textarea>

                                    <style>
                                        .note-editor {
                                            /* padding: 10px 10px; */
                                            background-color: white;
                                        }
                                    </style>
                                </div>
                                <button type="submit" class="pos393-submit">Post Your Answer</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--                end of col-md-9 -->
                <!--           strart col-md-3 (side bar)-->
                <aside class="col-md-3 sidebar97239">
                    <div class="categori-part329">
                        <h4>Category</h4>
                        <ul>
                            <li><a href="#">web developer</a></li>
                            <li><a href="#">Andriod developer</a></li>
                            <li><a href="#">grapics developer</a></li>
                            <li><a href="#">web developer</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/npm.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        integrity="sha384-Cp6vkjfrF8NflVeFYhUziOhR5GF7TATUbxMauz/j98k7H4UK6lgZt8V50+PQ07Tw" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"
        integrity="sha384-uHAJ7p8GoBhlrsy5StjfphGneNrmLymZ6EEmcM3yEGmXPhUxX8GILjv02KDdJJvS" crossorigin="anonymous">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.9.1/summernote.min.js"
        integrity="sha512-07bR+AJ2enmNU5RDrZkqMfVq06mQHgFxcmWN/hNSNY4E5SgYNOmTVqo/HCzrSxBhWU8mx3WB3ZJOixA9cRnCdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb7ue5rt3IIeT4f9KP4W4PH5wxxG4IvoRxNY" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"
        integrity="sha384-iQOOYhA2lDFP59KdhXaDFvhu8fv1yk9eYECnFPQskHd3/W4ArANwwIp68LPlsU8g" crossorigin="anonymous">
    </script>


    <!-- Summernote Initialization -->
    <script>
        $(document).ready(function() {
            $('#txtEditor').summernote({
                placeholder: 'Enter your question details',
                tabsize: 10,
                height: 200,
            });
        });
    </script>

@endsection
