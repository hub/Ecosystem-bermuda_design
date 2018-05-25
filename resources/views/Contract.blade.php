@extends('layout.app')

@section('content')
  <div class="form-two-page">
    <div class="step-navigation">
        <a href="#">Step 1</a>
        <a href="#">Step 2</a>
        <a href="#">Step 3</a>
        <a href="#">Step 4</a>
        <a href="#">Step 5</a>
        <a href="#">Step 6</a>
        <a href="#">Step 7</a>
    </div>
    <div class="forms-page-one">
        <form action="">
            <p class="title-step">Step 1: The Proposed Company</p>
            <div class="asd-hint">
                <p class="inp-categori">Name of Company <img class="icn-que" src="/public/dist/img/question.svg" alt=""></p>
                <div class="abs-block par-two">
                    Please give at least one alternative name.
                    <br>
                    <br>
                    If time permits, the proposed name can be reserved with the Registrar of Companies and can usually be confirmed within 24 hours.
                    <br>
                    <br>
                    If the company wishes to have a secondary name in a non-roman script, please provide a jpeg copy of same, along with a certificate of a notary fluent in the language and script in question, attesting to the English translation of the secondary name.
                </div>
            </div>
            <label class="input-text">
                <span class="title-input">Proposed *</span>
                <input type="text">
                <span class="hint-input">* Required field</span>
            </label>
            <label class="input-text">
                <span class="title-input">Alternates</span>
                <input type="text">
            </label>
            <label class="input-text">
                <input type="text">
            </label>
            <div class="asd-hint">
                <p class="inp-categori">Purpose of the Company <img class="icn-que" src="/public/dist/img/question.svg" alt=""></p>
                <div class="abs-block">
                    Certain types of companies (including insurance and investment fund companies) will require the submission of additional information and our incorporations department or an attorney will be pleased to advise accordingly.
                </div>
            </div>
            <label class="input-text">
                <span class="title-input">Purpose</span>
                <input type="text">
            </label>
            <div class="form-line-border"></div>
            <p class="inp-categori">Registered Office</p>
            <div class="date">
                <div class="aft-non">
                    <p>Address *</p>
                    <input class="inp-date hasDatepicker" type="text">
                    <span class="hint-input">* Required field</span>
                </div>
                <div class="aft-non">
                    <p>Country *</p>
                    <input class="inp-date hasDatepicker" type="text">
                    <span class="hint-input">* Required field</span>
                </div>
            </div>
            <div class="bnt-navigation">
                <a href="#"><img src="/public/dist/img/arrow-left.svg" alt=""> PREVIOUS</a>
                <a href="#">NEXT <img src="/public/dist/img/arrow-right.svg" alt=""></a>
            </div>
        </form>
    </div>
  </div>

@endsection