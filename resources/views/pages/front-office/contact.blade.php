@extends('layouts.master')
   @section('contenu_site')
   <section class="hero is-fullheight">
    <div class="hero-body">

        <div class="container has-text-centered">
            <div class="columns is-mobile is-centered">
                <div class="column is-half">
                    <div class="content">
                        <div class="title m-b-md">
                            Contact
                        </div>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Textarea"></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button class="button is-link">
                                Contact
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   @endsection