<!DOCTYPE html>
<html lang="en">
@include('store/_partials/head')
<body>

<!-- Page Header-->

@section('content')
    @foreach($posts as $post)
    @endforeach
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h2>{{$post->title}}</h2>
            <p>{{{$post->path}}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-block">
            <form action="/post/{{$post->id}}/comment" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" placeholder="Jusu komentaras" class="form-control">
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Rodyti</button>
                </div>
            </form>
        </div>
    </div>


@endsection
@include('store/_partials/footer')
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->

</body>
</html>
