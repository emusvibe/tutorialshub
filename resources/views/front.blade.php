@extends('layouts.app')

@section('content')

    <div class="container">
        <section>
            <div>
                <b-jumbotron header="Tutorials Hub" lead="Subscribe for a course in Music Production">
                  <p>For more information visit website</p>
                  <b-button variant="primary" href="{{route('series.index')}}">Browse Course</b-button>
                </b-jumbotron>
              </div>
        </section>

        <section>
            <div>
                <b-card-group deck>
                    @foreach($featuredSeries as $series)
                        <b-card class="text-center" title={{$series->title}} img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
                            <b-card-text>
                                @php $excerpt = Str::words($series->description, 10) @endphp
                                {!! $excerpt !!}
                            </b-card-text>
                                <template footer>
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </template>
                        </b-card>
                    @endforeach
              
                </b-card-group>
           </div>

        </section>
        <section>
            <pricing></pricing>
        </section>
    </div>
@endsection