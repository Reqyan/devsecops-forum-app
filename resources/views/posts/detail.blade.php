@extends('posts.layouts.base')
@section('title', 'Detail Posts')
@section ('content')
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
                  <h3>{{ $post->title}} </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="post-details-info1982">
            <p>{{ $post->content}}</p>
            <hr>
            <div class="post-footer29032">
              <div class="l-side2023"> 
                <i class="fa fa-folder folder2" aria-hidden="true"> {{ $post->category}}</i> 
                <i class="fa fa-clock-o clock2" aria-hidden="true"> {{ $post->created_at->format('j F Y') }}</i> <a href="#">
                <i class="fa fa-commenting commenting2" aria-hidden="true"> 5 answer</i></a> 
                <i class="fa fa-user user2" aria-hidden="true"> {{ $post->user->name }}</i> </div>
            </div>
          </div>
        </div>

        <form class="comment289-box" method="POST">
          @csrf()
          <input type="text" style="display: none" name="post_id" value="{{ $post->id }}">
          <div class="row">
            <div class="col-md-12">
              <div class="post9320-box">
                <input type="text" class="comment-input219882" name="content" placeholder="Enter Your Post">
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