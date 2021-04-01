@extends('simplelayout')

@section('content')

    <div id="wrapper">

        <div id="page" class="container">

            <h1 class="heading has-text-weight-bold is-size-4" >New Article</h1>

            <form action="">
                <div class="field">
                    <label for="title" class="label">Title</label>

                    <div class="control">
                        <input type="text" class="input" name="title" id="title">
                    </div>
                </div>

                <div class="field">
                <label for="excerpt" class="excerpt">Excerpt</label>


                    <div class="control">
                        <textarea name="excerpt" id="excerpt" class="textarea"></textarea>
                    </div>
                </div>

                <div class="field">
                <label for="body" class="body">Body</label>


                    <div class="control">
                        <textarea name="body" id="body" class="textarea"></textarea>
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
