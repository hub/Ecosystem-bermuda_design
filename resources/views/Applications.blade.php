@extends('layout.app')

@section('content')
  <div class="form-two-page">
    <div class="navigation-two-page">
        <a class="activ-page-btn" href="#">Virtual Currency Business License</a>
        <a href="#">ICO Project License</a>
    </div>
    <div class="forms-page-one">
        <form action="">
            <label class="input-text">
                <span class="title-input">The exact name of the applicant, including any doing business as name *</span>
                <input type="text">
                <span class="hint-input">* Required field</span>
            </label>
            <label class="input-text">
                <span class="title-input">Please submit a business plan setting out the nature and scale of the virtual currency business activity which is to be carried out</span>
                <input type="text">
            </label>
            <div class="form-line-border"></div>
            <label class="input-text">
                <span class="title-input">An organisation chart of the applicant and its management structure</span>
                <input type="text">
            </label>
            
            <div class="block-file">
                Choose file
                <input class="input-file" type="file">
                <span class="add-file-icn">
                    <img src="/public/dist/img/VectorSmartObjec-3.svg" alt="">
                </span>
            </div>
            
            <div class="form-line-border"></div>
            <label class="input-text">
                <span class="title-input">A description of the proposed, current, and historical business of the applicant</span>
                <input type="text">
            </label>
            
            <div class="block-file">
                Choose file
                <input class="input-file" type="file">
                <span class="add-file-icn">
                    <img src="/public/dist/img/VectorSmartObjec-3.svg" alt="">
                </span>
            </div>
            
            <div class="form-line-border"></div>
            <label class="input-text">
                <span class="title-input">Policies and procedures to be adopted to meet the obligations under Virtual Currency Business Act 2018</span>
                <input type="text">
            </label>
            
            <div class="block-file">
                Choose file
                <input class="input-file" type="file">
                <span class="add-file-icn">
                    <img src="/public/dist/img/VectorSmartObjec-3.svg" alt="">
                </span>
            </div>
            
            <div class="form-line-border"></div>

            <p class="title-radio">Class of Virtual Currency Business Licence *</p>
            <div class="radiobuttun">
                <label class="welkit-choice">
                    <input type="radio" checked="checked" name="radio">
                    <span class="check radio"></span>
                    Class F Licence
                </label>
                <p class="radio-text">Under which a person shall be licensed to provide any or all of the virtual currency business activities under the definition of virtual currency business.</p>
            </div>
            
            <div class="radiobuttun">
                <label class="welkit-choice">
                    <input type="radio" name="radio">
                    <span class="check radio"></span>
                    Class M Licence
                </label>
                <p class="radio-text">Under which a person shall be licensed to provide any or all of the virtual currency business activities under the definition of virtual currency business for a defined period determined by the Authority.</p>
            </div>
            <div class="form-line-border"></div>
            <div class="block-file">
                Choose file
                <input class="input-file" type="file">
                <span class="add-file-icn">
                    <img src="/public/dist/img/VectorSmartObjec-3.svg" alt="">
                </span>
            </div>
            <div class="button-box">
                <input class="btn-submit btn-submit-input" type="submit" value=" Submit ">
                <a class="btn-cancel" href="">CANCEL</a>
            </div>
        </form>
    </div>
</div>

@endsection