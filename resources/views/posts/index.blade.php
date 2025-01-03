@extends('posts.layouts.base')
@section('title', 'Posts')
@section('content')
    <section class="main-content920">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="main">
                        <input id="tab1" type="radio" name="tabs" checked>
                        <label for="tab1">Recent Question</label>
                        <input id="tab2" type="radio" name="tabs">
                        <label for="tab2">Most Response</label>
                        <input id="tab3" type="radio" name="tabs">
                        <label for="tab3">Recently Answered</label>

                        <section id="content1">
                            @foreach ($posts as $data_post)
                                <div class="question-type2033">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="left-user12923 left-user12923-repeat">
                                                <a href="#"><img src="image/images.png" alt="test"> </a> <a
                                                    href="#"><i class="fa fa-check"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="right-description893">
                                                <div id="que-hedder2983">
                                                    <h3>
                                                        <a href="{{ route('detail-posts', $data_post->id) }}"
                                                            target="_blank" rel="noopener noreferrer">
                                                            {{ $data_post->title }}
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div class="ques-details10018">
                                                    <p>{!! $data_post->content !!}</p>
                                                </div>
                                                <hr>
                                                <div class="ques-icon-info3293 d-flex align-items-center">
                                                    <!-- User Info -->


                                                    <form action="{{ route('delete-post', $data_post->id) }}" method="POST"
                                                        class="d-inline ml-3">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" class="mr-3">
                                                            <i class="fa fa-user">
                                                                {{ $data_post->user->name }}</i>
                                                        </a>
                                                        @if ($data_post->user->id == auth()->user()->id)
                                                            <a href="{{ route('edit-post', $data_post->id) }}"
                                                                class="btn btn-primary btn-sm ml-3">
                                                                Edit Postingan
                                                            </a>
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this post?')">
                                                                Delete
                                                            </button>
                                                        @endif
                                                    </form>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @endforeach
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </section>
                        <!--  End of content-1------>
                        <section id="content2">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </section>
                        <!----end of content-2----->
                        <section id="content3">
                            <!--Recently answered Content Section -->
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </section>
                        <!--End content-3 -->
                    </div>
                </div>
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
