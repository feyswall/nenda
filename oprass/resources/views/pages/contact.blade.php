@extends('layouts.app')

@section('content')
    <div id="">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <h1>Contact Me</h1>
            <form action="" class="">
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input name="email" id="email" class='form-control'>
                </div>
                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input name="subject" id="subject" class='form-control'>
                </div>
                <div class="form-group">
                    <label name="message">Massage:</label>
                    <textarea  rows="7"  name="message" id="message" class='form-control'>
                            Please Write Here Your Massage
                        </textarea>
                </div>
                <input type="submit" value="send Massage" class="btn btn-success">
            </form>
        </div>
    </div>
    </div>
@stop