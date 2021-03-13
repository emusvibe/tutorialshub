@extends('layouts.app')

@section('content')

    <div class="container">
        <section class="mb-5">
            <div>
                <b-row>
                    @foreach($series as $s)
                        <b-col cols="4">
                            <b-card 
                                title = "{{$s->title}}"
                                class="text-center"
                                {{-- img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top --}}
                                img-src="{{$s->image? asset('storage/'.$s->image) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPOs4jT_cgp2si_Jeaz7glQ-l5zJ9PpjQSj4WjG3vMW-1jtCe3'}}" img-alt="Image" img-top
                                >

                                <b-card-text>
                                    @php $excerpt = \Str::words($s->description, 10) @endphp

                                    {!! $excerpt !!}
                                </b-card-text>
                                <template v-slot:footer>
                                    <b-button href="{{route('series.show', $s)}}" variant="primary">Play</b-button>
                                </template>

                        </b-col>
                    @endforeach
                </b-row>
            </div>
            
        </section>

     
        <section>
            <pricing></pricing>
        </section>
    </div>
@endsection