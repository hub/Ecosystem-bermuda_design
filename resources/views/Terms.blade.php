@extends('layout.app')

@section('content')

<div class="form-two-page">
    <div class="navigation-two-page link-colum">
        <a class="activ-page-btn" href="#">Terms Submission</a>
        <a href="#">Library of Terms & Conditions</a>
        <a href="#">Submitted Terms</a>
    </div>
    <div class="forms-page-one">
        <form action="">
            <div class="select-block max-sel">
                <div class="aft-non">
                    <p>Choose category</p>
                    <select>
                        <option value="hide"></option>
                        <option value="2010">AED</option>
                        <option value="2011">AUD</option>
                        <option value="2012">BCH</option>
                        <option value="2013">BRL</option>
                        <option value="2014">BTC</option>
                    </select>
                </div>
            </div>
            <label class="input-text">
                <span class="title-input">Terms text</span>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </label>
            <div class="button-box">
                <input class="btn-submit btn-submit-input" type="submit" value=" Submit ">
                <a class="btn-cancel" href="">CANCEL</a>
            </div>
        </form>
    </div>
</div>

@endsection