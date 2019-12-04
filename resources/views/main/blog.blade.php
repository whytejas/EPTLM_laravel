@extends('master')
@section('title', 'EPTLM: Blog')
@section('content')

    @include('partials.logo')


    <img  class="header-img" src="{{ asset('/images/pages/blog.jpg') }}" alt="blog">
    <div class="container">


        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="#">World</a>
                <a class="p-2 text-muted" href="#">Paris</a>
                <a class="p-2 text-muted" href="#">Culture</a>
                <a class="p-2 text-muted" href="#">Politics</a>
                <a class="p-2 text-muted" href="#">Opinion</a>
                <a class="p-2 text-muted" href="#">Health</a>

            </nav>
        </div>

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">The EPTLM Blog will be up and running soon! </h1>
                <p class="lead my-3">Watch this space for more!!</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">News</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">Featured post</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Volunteer</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">Post title</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="">
                </div>
            </div>
        </div>
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Latest Posts
                </h3>



                @foreach($articles as $article)

                    <div class="blog-post">
                        <h2 class="blog-post-title"><a href="{{ action('ArticlesController@show', [$article->id])}}">{{$article->Title}}</a></h2>
                        <p class="blog-post-meta">by {{ucfirst($article->user()->value('username'))}} :: {{$article->created_at->diffForHumans()}}  </p>



                        <p>{!!$article->Content!!}</p>


                    </div><!-- /.blog-post -->
                @endforeach









                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2019</a></li>
                        <li><a href="#">February 2019</a></li>
                        <li><a href="#">January 2019</a></li>
                        <li><a href="#">December 2019</a></li>
                        <li><a href="#">November 2019</a></li>
                        <li><a href="#">October 2019</a></li>
                        <li><a href="#">September 2019</a></li>
                        <li><a href="#">August 2019</a></li>
                        <li><a href="#">July 2019</a></li>
                        <li><a href="#">June 2019</a></li>
                        <li><a href="#">May 2019</a></li>
                        <li><a href="#">April 2019</a></li>
                    </ol>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>



    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>



@stop
