@extends('posts.layouts.base')
@section('title', 'Posts')
@section ('content')
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
          <input id="tab4" type="radio" name="tabs">
          <label for="tab4">No Answer</label>
          <input id="tab5" type="radio" name="tabs">
          <label for="tab5">Recent Post</label>
          <section id="content1">
            @foreach ($posts as $data_post)
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="{{ route('detail-posts', $data_post->id) }}" target="_blank">{{ $data_post->title }}</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>{{ $data_post->content }}</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293">
											<a href="#"><i class="fa fa-user" aria-hidden="true"> {{ $data_post->user->name }}</i></a>
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
                  <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </section>
          <!--  End of content-1------>
          <section id="content2">
            <!--Most Response Content Section -->
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">Coronavirus disease (COVID-19)</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-check" aria-hidden="true"> solved</i></a> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5</i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-comment" aria-hidden="true">  5 answer</i></a> <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Can You Bring to the Company?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Are Your Greatest Strengths?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Do You Consider to Be Your Weaknesses?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Can You Bring to the Company?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Are Your Greatest Strengths?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Do You Consider to Be Your Weaknesses?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </section>
          <!----end of content-2----->
          <section id="content3">
            <!--Recently answered Content Section -->
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-check" aria-hidden="true"> solved</i></a> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5</i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-comment" aria-hidden="true">  5 answer</i></a> <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-check check-color329" aria-hidden="true"> solved</i></a> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5</i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-comment" aria-hidden="true">  5 answer</i></a> <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Can You Bring to the Company?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Are Your Greatest Strengths?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Do You Consider to Be Your Weaknesses?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Can You Bring to the Company?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Are Your Greatest Strengths?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Do You Consider to Be Your Weaknesses?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </section>
          <!--End content-3 -->
          <section id="content4">
            <!--No answered Content Section -->
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-check check-color329" aria-hidden="true"> solved</i></a> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5</i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-comment" aria-hidden="true">  5 answer</i></a> <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Can You Bring to the Company?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Are Your Greatest Strengths?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Do You Consider to Be Your Weaknesses?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Can You Bring to the Company?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Are Your Greatest Strengths?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Do You Consider to Be Your Weaknesses?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--End of content-4-->
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </section>
          <section id="content5">
            <!--Recent Question Content Section -->
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Can You Bring to the Company?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Are Your Greatest Strengths?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Do You Consider to Be Your Weaknesses?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Can You Bring to the Company?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Are Your Greatest Strengths?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">What Do You Consider to Be Your Weaknesses?</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="question-type2033">
              <div class="row">
                <div class="col-md-1">
                  <div class="left-user12923 left-user12923-repeat">
                    <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> 
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="right-description893">
                    <div id="que-hedder2983">
                      <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3>
                    </div>
                    <div class="ques-details10018">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                    </div>
                    <hr>
                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="ques-type302">
                    <a href="#">
                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                    </a>
                    <a href="#">
                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--End of content-5-->
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </section>
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
        <div class="tags-part2398">
          <h4>Tags</h4>
          <ul>
            <li><a href="#">analytics</a></li>
            <li><a href="#">Computer</a></li>
            <li><a href="#">Developer</a></li>
            <li><a href="#">Google</a></li>
            <li><a href="#">Interview</a></li>
            <li><a href="#">Programmer</a></li>
            <li><a href="#">Salary</a></li>
            <li><a href="#">University</a></li>
            <li><a href="#">Employee</a></li>
          </ul>
        </div>
        <!--          End tags part-->
        <!--        start recent post  -->
        <div class="recent-post3290">
          <h4>Recent Post</h4>
          <div class="post-details021">
            <a href="#">
              <h5>How much do web developers</h5>
            </a>
            <p>I am thinking of pursuing web developing as a career & was ...</p>
            <small style="color: #848991">July 16, 2017</small> 
          </div>
          <hr>
          <div class="post-details021">
            <a href="#">
              <h5>How much do web developers</h5>
            </a>
            <p>I am thinking of pursuing web developing as a career & was ...</p>
            <small style="color: #848991">July 16, 2017</small> 
          </div>
          <hr>
          <div class="post-details021">
            <a href="#">
              <h5>How much do web developers</h5>
            </a>
            <p>I am thinking of pursuing web developing as a career & was ...</p>
            <small style="color: #848991">July 16, 2017</small> 
          </div>
        </div>
        <!--       end recent post    -->
      </aside>
    </div>
  </div>
</section>
@endsection