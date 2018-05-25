@extends('layout.app')

@section('content')
    <div class="form-two-page">
        <div class="navigation-two-page">
            <a href="#">Virtual Currency Business License</a>
            <a class="activ-page-btn" href="#">ICO Project License</a>
        </div>
        <div class="forms-page-one">
            <form action="">
                <label class="input-text">
                    <span class="title-input">Name and the address of the registered office or principal office of the promoters *</span>
                    <input type="text">
                    <span class="hint-input">* Required field</span>
                </label>
                <label class="input-text">
                    <span class="title-input">Name, description and titles of the officers of the promoter *</span>
                    <input type="text">
                    <span class="hint-input">* Required field</span>
                </label>
                <label class="input-text">
                    <span class="title-input">The business or proposed business of the company *</span>
                    <input type="text">
                    <span class="hint-input">* Required field</span>
                </label>
                <div class="form-line-border"></div>
                <label class="input-text">
                    <span class="title-input">The minimum amount of money equivalent (in Bermuda dollars) of digital assets <img class="icn-que" src="/public/dist/img/question.svg" alt=""></span>
                    <input type="text">
                    <div class="abs-block">
                        The Initial Coin Offering is intended to raise in the opinion of the promoters or directors must be raised;
                        <br>
                        <br>
                        The disclosure as to the allocation of the amounts to be raised amongst the classes of any issuance (pre-sale, post Initial Coin Offering etc.).
                    </div>
                </label>
                <label class="input-text">
                    <span class="title-input">Any rights or restrictions on the digital assets that are being offered</span>
                    <input type="text">
                </label>
                <label class="input-text">
                    <span class="title-input">All commissions payable on the sale of the digital assets referred to in the ICO offer document and the net amount receivable by the company in respect of the sale of digital assets</span>
                    <input type="text">
                </label>
                <div class="form-line-border"></div>
                <div class="date">
                    <div>
                        <p>Opening of the offering of digital assets</p>
                        <img src="/public/dist/img/date.svg" alt="">
                        <input class="inp-date" type="text" id="datepicker-one">
                    </div>
                    <div>
                        <p>Closing of the offering of digital assets</p>
                        <img src="/public/dist/img/date.svg" alt="">
                        <input class="inp-date" type="text" id="datepicker-two">
                    </div>
                </div>
                <label class="input-text">
                    <span class="title-input">The proposed timeline for the project including any proposed project phases and milestones</span>
                    <input type="text">
                </label>
                <div class="form-line-border"></div>
                <label class="input-text">
                    <span class="title-input">The general Initial Coin Offering risk warning referred to in section 34F <img class="icn-que" src="/public/dist/img/question.svg" alt=""></span>
                    <input type="text">
                    <div class="abs-block par-two">
                        34F: General Initial Coin Offering risk warning:
                        <br>
                        <br>
                        - the promoter shall ensure that the general Initial Coin Offering riskwarning appears in the ICO offer document and prominently on the ICO offerplatform at all times while the offer is open or suspended;
                        <br>
                        <br>
                        - the general Initial Coin Offering risk warning is a statement that includes the following information regarding any substantial risks of to the project [whichare known or reasonable forseeable];
                        <br>
                        <br>
                        - information as to a person’s rights or options if the project whichis the subject of the Initial Coin Offering in question does not goforward;
                        <br>
                        <br>
                        - a description of the rights (if any) in relation to the digital assetsthat are being offered;
                        <br>
                        <br>
                        - information regarding any disclaimer in respect of guarantees orwarranties in relation to the project to be.
                    </div>
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
                    <span class="title-input">Statement as to how personal information will be used</span>
                    <input type="text">
                    <span class="hint-input">* Required field</span>
                </label>
                <p class="text-inp-one">Certificate signed by an attorney [or an officer of the company] certifying that the ICO offer document contains the particulars required</p>
                <div class="block-file">
                    Choose file
                    <input class="input-file" type="file">
                    <span class="add-file-icn">
                        <img src="/public/dist/img/VectorSmartObjec-3.svg" alt="">
                    </span>
                </div>
                <div class="form-line-border"></div>
                <label class="input-text">
                    <span class="title-input">Other information ie. white paper, deck, memorandum of agreement</span>
                    <input type="text">
                </label>
                
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