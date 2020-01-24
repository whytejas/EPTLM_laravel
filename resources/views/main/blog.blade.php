@extends('master')
@section('title', 'EPTLM: Blog')
@section('content')

    @include('partials.logo')


    <img  class="header-img" src="{{ asset('/images/pages/blog.jpg') }}" alt="blog">
    <div class="container">

        <main class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <h3 class="pb-3 mb-4 font-italic border-bottom">
                        Latest Posts
                    </h3>

                    @foreach($articles as $article)

                        <div class="blog-post">
                            <h2 class="blog-post-title"><a href="{{ action('ArticlesController@show', [$article->id])}}">{{$article->Title}}</a></h2>
                            <p class="blog-post-meta">by {{ucfirst($article->user()->value('username'))}} :: {{$article->created_at->diffForHumans()}}  </p>
                            @if (isset($article->filename))
                            <img class="card-img-top" src="{{asset('/uploads/blog/images/'.$article->filename) }}" alt="{{$article->filename}}">
                            @endif
                            {!!$article->Content!!}


                        </div><!-- /.blog-post -->
                    @endforeach


                    <nav class="blog-pagination">
                        {{ $articles->links() }}

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

    </div>

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
