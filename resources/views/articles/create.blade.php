@extends('simplelayout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

@endsection

@section('content')

    <div id="wrapper">

        <div id="page" class="container">

            <h1 class="heading has-text-weight-bold is-size-4" >New Article</h1>

            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text"
                         class="input {{$errors->has('title') ? 'is-danger' : ''}}"
                          name="title"
                           id="title"
                           value = "{{old('title')}}"
                           >
                        @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                <label for="excerpt" class="excerpt">Excerpt</label>
                    <div class="control">
                        <textarea name="excerpt"
                         id="excerpt"
                          class="textarea  {{$errors->has('excerpt') ? 'is-danger' : ''}}"
                          >
                          {{old('excerpt')}}
                          </textarea>
                        @if ($errors->has('excerpt'))
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                <label for="body" class="body">Body</label>


                    <div class="control">
                        <textarea
                        name="body"
                         id="body"
                         class="textarea {{$errors->has('body') ? 'is-danger' : ''}}"
                         >
                         {{old('body')}}
                         </textarea>
                        @if ($errors->has('body'))
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @endif
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

                </div>

            </form>

        </div>


    </div>

@endsection
