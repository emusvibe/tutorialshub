@extends('layouts.app')
@section('content')
<b-container>
    <section>
        <b-jumbotron>

            <template v-slot:header>
                 {{$series->title}}
            </template>
        <template v-slot:lead>
            {{$series->description}}
        </template>

        <hr class="my-4">
        <b-button variant="primary" href="#">Start Series</b-button>
        <b-button variant="success" href="{{route('payment')}}">Subscribe</b-button>

    </b-jumbotron>
</section>

<section class="mb-5">

    <h3 class="mb-3 text-center">Episodes</h3>
  {{-- <b-card no-body class="overflow-hidden mb-2">
   <b-row no-gutters>
    <b-col md="2">
        <b-button>1</b-button>
    </b-col>
    <b-col md="10">
        <b-card-body title="video.title">
            <b-card-text>
                some text
            </b-card-text>
        </b-card-body>
    </b-col>
   </b-row>
   
  </b-card> --}}

  <episodes :videos="{{$series->videos}}"></episodes>
</section>
</b-container>
@endsection 