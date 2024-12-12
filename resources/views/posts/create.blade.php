@extends('posts.layouts.base')
@section('title', 'Tambah Postingan')

@section('content')

    <section class="header-descriptin329">
        <div class="container">
            <h3>Ask Question</h3>
            <ol class="breadcrumb breadcrumb839">
                <li><a href="#">Home</a></li>
                <li class="active">Ask Question</li>
            </ol>
        </div>
    </section>
    <section class="main-content920">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="ask-question-input-part032">
                        <h4>Ask Question</h4>
                        <hr>
                        <form method="POST" action="{{ route('store-post') }}">
                            @csrf
                            <div class="username-part940">
                                <span class="form-description43" style="margin: 0 100px 0 0;">Title</span>
                                <input type="text" name="title" class="username029" placeholder="Enter your Title">
                                <style>
                                    .username029 {
                                        border-color: #DEDEDE;
                                        background-color: white;
                                    }

                                    .username029:focus {
                                        border-color: #FF7361;
                                    }
                                </style>
                            </div>

                            <div class="categori49" style="display: flex;">
                                <span class="form-description433" style="margin: 0 75px 0 0;">Category</span>

                                <input list="category" name="category" class="list-category53 " style="margin: 0 75px 0 0;"
                                    placeholder="Enter your Category" />
                                <style>
                                    .list-category53 {
                                        border-color: #DEDEDE;
                                        background-color: white;
                                    }

                                    .list-category53:focus {
                                        border-color: #FF7361;
                                    }
                                </style>
                                <datalist id="category">
                                    <option value="Front_End Web Developer">
                                    <option value="Back-End Developer">
                                    <option value="Android Developer">
                                    <option value="Web Application">
                                    <option value="System Analyst">
                                    <option value="Security">
                                </datalist>
                            </div>

                            <div class="details2-239">
                                <div class="col-md-12 nopadding">
                                    <textarea id="txtEditor" name="content" class="content form-control"
                                        style="padding: 10px 10px; margin: 0 0 0 115px; width: 78%;"></textarea>
                                    <style>
                                        .note-editor {
                                            margin: 0 0 0 130px;
                                            width: 75%;
                                        }
                                    </style>

                                </div>
                            </div>

                            <div class="publish-button2389">
                                <button type="submit" class="publis1291">Publish your Question</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="col-md-3 sidebar97239">
                    <div class="categori-part329">
                        <h4>Category</h4>
                        <ul>
                            <li><a href="#">Web Developer</a></li>
                            <li><a href="#">Android Developer</a></li>
                            <li><a href="#">Graphics Developer</a></li>
                        </ul>
                    </div>

                    <div class="tags-part2398">
                        <h4>Tags</h4>
                        <ul>
                            <li><a href="#">Analytics</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Developer</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">Interview</a></li>
                        </ul>
                    </div>

                    <div class="recent-post3290">
                        <h4>Recent Post</h4>
                        <div class="post-details021">
                            <a href="#">
                                <h5>How much do web developers</h5>
                            </a>
                            <p>I am thinking of pursuing web developing as a career & was ...</p>
                            <small style="color: #848991">July 16, 2017</small>
                        </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
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
