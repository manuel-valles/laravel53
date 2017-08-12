<!-- Inherit everything inside the master file-->
@extends('layouts.master');

@section('title')
	Blade
@endsection

@section('body')
	  <div class="jumbotron">
        {{-- IF/ELSE --}}
        <h1>
          Your gender is
          @if($gender == 'male')
            male
          @elseif($gender == 'female')
            female
          @else
            unknown
          @endif
        </h1>
        {{-- UNLESS --}}
        <p class="lead">
          @unless(empty($text))
            {{$text}}
          @endunless
          {{-- This is the same than --}}
          @if(!empty($text))
            {{$text}}
          @endif
        </p>
        {{-- SHORTHAND IF/ELSE? --}}
        <p>
          {{-- Something similar to 
          (true) ? This is true: This is false --}}

          {{isset($text) ? $text : 'The variable does not exist'}}
        </p>
        <p>
          {{isset($text2) ? $text2 : 'The variable does not exist'}}
        </p>
        {{-- This is easier with OR --}}
        <p>
          {{$text2 or 'The variable does not really exist'}}
        </p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>
@endsection