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
                            <span class="form-description43">Title</span>
                            <input type="text" name="title" class="username029" placeholder="Enter your Title">
                        </div>
                        
                        <div class="categori49">
                            <span class="form-description43305">Category</span>
                            <input list="category" name="category" class="list-category53"/>
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
                                <textarea id="content" name="content" placeholder="Enter your question details"></textarea>
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
                        <a href="#"><h5>How much do web developers</h5></a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/npm.js') }}"></script>
@endsection
