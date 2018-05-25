@extends('layout.app')

@section('content')

    <form action="" class="form-steps">
        <h3 class="step-h">1</h3>
        <section>
            <div class="form-two-page">
                <div class="step-navigation">
                    <a class="active-step" href="#">Step 1</a>
                    <a href="#">Step 2</a>
                    <a href="#">Step 3</a>
                    <a href="#">Step 4</a>
                    <a href="#">Step 5</a>
                    <a href="#">Step 6</a>
                    <a href="#">Step 7</a>
                </div>
                <div class="forms-page-one">
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
                            <input class="inp-date" type="text">
                            <span class="hint-input">* Required field</span>
                        </div>
                        <div class="aft-non">
                            <p>Country *</p>
                            <input class="inp-date" type="text">
                            <span class="hint-input">* Required field</span>
                        </div>
                    </div>
                    <div class="bnt-navigation">
                        <a class="previous" href="#"><img src="/public/dist/img/arrow-left.svg" alt=""> PREVIOUS</a>
                        <a class="next" href="#">NEXT <img src="/public/dist/img/arrow-right.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>


        <h3 class="step-h">2</h3>
        <section>
            <div class="form-two-page">
                <div class="step-navigation">
                    <a href="#">Step 1</a>
                    <a class="active-step" href="#">Step 2</a>
                    <a href="#">Step 3</a>
                    <a href="#">Step 4</a>
                    <a href="#">Step 5</a>
                    <a href="#">Step 6</a>
                    <a href="#">Step 7</a>
                </div>
                <div class="forms-page-one">
                    <p class="title-step">Step 2: Ownership Structure of the Proposed Company</p>
                    <p class="inp-categori">For Each Registered Member that is an Individual</p>
                    <label class="input-text">
                        <span class="title-input">Surname</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Given name</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Middle name(s)</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Address</span>
                        <input type="text">
                    </label>
                    <div class="date">
                        <div>
                            <p>Date of birth</p>
                            <img src="/public/dist/img/date.svg" alt="">
                            <input class="inp-date hasDatepicker" type="text" id="datepicker-one">
                        </div>
                    </div>
                    <label class="input-text">
                        <span class="title-input">Nationality</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Number of shares in the new company this member will hold</span>
                        <input type="text">
                    </label>
                    
                    <div class="radiobuttun">
                        <label class="welkit-choice">
                            <input type="checkbox" checked="checked">
                            <span class="check checkbox"></span>
                            Fully paid
                        </label> 
                    </div>
                    
                    <div class="radiobuttun">
                        <label class="welkit-choice">
                            <input type="checkbox">
                            <span class="check checkbox"></span>
                            Nil paid
                        </label>
                    </div>
                    
                    <div class="radiobuttun inp-proc">
                        <label class="welkit-choice">
                            <input type="checkbox">
                            <span class="check checkbox"></span>
                            Partly paid
                        </label>
                        <input class="inp-checbox" type="text" placeholder="%">
                    </div>
                    
                    <div class="form-line-border"></div>
                    <p class="inp-categori">For Each Registered Member that is a Company</p>
                    <label class="input-text">
                        <span class="title-input">Name of company</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Address</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Place of incorporation</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Stock exchange (if any)</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Number of shares in the new company this member will hold</span>
                        <input type="text">
                    </label>
                    <div class="radiobuttun">
                        <label class="welkit-choice">
                            <input type="checkbox" checked="checked">
                            <span class="check checkbox"></span>
                            Fully paid
                        </label> 
                    </div>
                    <div class="radiobuttun">
                        <label class="welkit-choice">
                            <input type="checkbox">
                            <span class="check checkbox"></span>
                            Nil paid
                        </label>
                    </div>
                    <div class="radiobuttun inp-proc">
                        <label class="welkit-choice">
                            <input type="checkbox">
                            <span class="check checkbox"></span>
                            Partly paid
                        </label>
                        <input class="inp-checbox" type="text" placeholder="%">
                    </div>
                    <div class="form-line-border"></div>
                
                    <p class="inp-categori">For Each Registered Member that is a Partnership</p>
                    <label class="input-text">
                        <span class="title-input">Name of partnership</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Address</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Place of formation</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Number of shares in the new company this member will hold</span>
                        <input type="text">
                    </label>
                    <div class="radiobuttun">
                        <label class="welkit-choice">
                            <input type="checkbox" checked="checked">
                            <span class="check checkbox"></span>
                            Fully paid
                        </label> 
                    </div>
                    <div class="radiobuttun">
                        <label class="welkit-choice">
                            <input type="checkbox">
                            <span class="check checkbox"></span>
                            Nil paid
                        </label>
                    </div>
                    <div class="radiobuttun inp-proc">
                        <label class="welkit-choice">
                            <input type="checkbox">
                            <span class="check checkbox"></span>
                            Partly paid
                        </label>
                        <input class="inp-checbox" type="text" placeholder="%">
                    </div>
                    <div class="form-line-border"></div>

                    <p class="inp-categori">For Each Registered Member that is Trustee of a Trust</p>
                    <label class="input-text">
                        <span class="title-input">Name of Trust</span>
                        <input type="text">
                    </label>
                    <div class="date">
                        <div>
                            <p>Date of settlement</p>
                            <img src="/public/dist/img/date.svg" alt="">
                            <input class="inp-date hasDatepicker" type="text" id="datepicker-one">
                        </div>
                    </div>
                    <label class="input-text">
                        <span class="title-input">Place of settlement</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Number of shares in the new company this member will hold</span>
                        <input type="text">
                    </label>
                    <div class="radiobuttun">
                        <label class="welkit-choice">
                            <input type="checkbox" checked="checked">
                            <span class="check checkbox"></span>
                            Fully paid
                        </label> 
                    </div>
                    <div class="radiobuttun">
                        <label class="welkit-choice">
                            <input type="checkbox">
                            <span class="check checkbox"></span>
                            Nil paid
                        </label>
                    </div>
                    <div class="radiobuttun inp-proc">
                        <label class="welkit-choice">
                            <input type="checkbox">
                            <span class="check checkbox"></span>
                            Partly paid
                        </label>
                        <input class="inp-checbox" type="text" placeholder="%">
                    </div>
                    
                    <div class="bnt-navigation">
                        <a class="previous" href="#"><img src="/public/dist/img/arrow-left.svg" alt=""> PREVIOUS</a>
                        <a class="next" href="#">NEXT <img src="/public/dist/img/arrow-right.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>


        <h3 class="step-h">3</h3>
        <section>
            <div class="form-two-page">
                <div class="step-navigation">
                    <a href="#">Step 1</a>
                    <a href="#">Step 2</a>
                    <a class="active-step" href="#">Step 3</a>
                    <a href="#">Step 4</a>
                    <a href="#">Step 5</a>
                    <a href="#">Step 6</a>
                    <a href="#">Step 7</a>
                </div>
                <div class="forms-page-one">
                    <p class="title-step">Step 3: Shares and Capital</p>
                    <p class="inp-categori">For Each Registered Member that is an Individual</p>
                    <div class="date">
                        <div class="aft-non">
                            <p>Amount</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Currency</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="form-line-border"></div>
                    <p class="inp-categori">Par Value per Share (if single class)</p>
                    <div class="date">
                        <div class="aft-non">
                            <p>Amount</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Currency</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="form-line-border"></div>
                    <p class="inp-categori">Par Value per Share (if single class)</p>
                    <div class="date">
                        <div class="aft-non">
                            <p>Amount</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Currency</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="date">
                        <div class="aft-non">
                            <p>Par value</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p># Shares of this class</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="form-line-border"></div>
                    <div class="date">
                        <div class="aft-non">
                            <p>Amount</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Currency</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="date">
                        <div class="aft-non">
                            <p>Par value</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p># Shares of this class</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="form-line-border"></div>
                    <div class="date">
                        <div class="aft-non">
                            <p>Amount</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Currency</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="date">
                        <div class="aft-non">
                            <p>Par value</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p># Shares of this class</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="bnt-navigation">
                        <a class="previous" href="#"><img src="/public/dist/img/arrow-left.svg" alt=""> PREVIOUS</a>
                        <a class="next" href="#">NEXT <img src="/public/dist/img/arrow-right.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>


        <h3 class="step-h">4</h3>
        <section>
            <div class="form-two-page">
                <div class="step-navigation">
                    <a href="#">Step 1</a>
                    <a href="#">Step 2</a>
                    <a href="#">Step 3</a>
                    <a class="active-step" href="#">Step 4</a>
                    <a href="#">Step 5</a>
                    <a href="#">Step 6</a>
                    <a href="#">Step 7</a>
                </div>
                <div class="forms-page-one">
                    <p class="title-step">Step 4: Personnel</p>
                    <div class="asd-hint">
                        <p class="inp-categori">Directors and Alternate Directors <img class="icn-que" src="/public/dist/img/question.svg" alt=""></p>
                        <div class="abs-block par-three" style="display: none;">
                            Par value per share (if multiple classes)
                        </div>
                    </div>
                    <div class="date">
                        <div class="aft-non">
                            <p>Name</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Address</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="date">
                        <div class="aft-non">
                            <p>Phone number</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Email</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="form-line-border"></div>
                    <div class="date">
                        <div class="aft-non">
                            <p>Phone number</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Email</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="form-line-border"></div>
                    <div class="date">
                        <div class="aft-non">
                            <p>Phone number</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Email</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <div class="bnt-navigation">
                        <a class="previous" href="#"><img src="/public/dist/img/arrow-left.svg" alt=""> PREVIOUS</a>
                        <a class="next" href="#">NEXT <img src="/public/dist/img/arrow-right.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <h3 class="step-h">5</h3>
        <section>
            <div class="form-two-page">
                <div class="step-navigation">
                    <a href="#">Step 1</a>
                    <a href="#">Step 2</a>
                    <a href="#">Step 3</a>
                    <a href="#">Step 4</a>
                    <a class="active-step" href="#">Step 5</a>
                    <a href="#">Step 6</a>
                    <a href="#">Step 7</a>
                </div>
                <div class="forms-page-one">
                    <p class="title-step">Step 5: Financial Matters</p>
                    <label class="input-text">
                        <span class="title-input">Financial year end</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">First financial statements to be prepared for the year ending</span>
                        <input type="text">
                    </label>
                    <label class="input-text">
                        <span class="title-input">Is a bank account required?</span>
                        <input type="text">
                    </label>
                    <div class="date">
                        <div class="aft-non">
                            <p>Your bank</p>
                            <input class="inp-date" type="text">
                        </div>
                        <div class="aft-non">
                            <p>Currency</p>
                            <input class="inp-date" type="text">
                        </div>
                    </div>
                    <label class="input-text">
                        <span class="title-input">Bank address</span>
                        <input type="text">
                    </label>
                    <div class="bnt-navigation">
                        <a class="previous" href="#"><img src="/public/dist/img/arrow-left.svg" alt=""> PREVIOUS</a>
                        <a class="next" href="#">NEXT <img src="/public/dist/img/arrow-right.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>


        <h3 class="step-h">6</h3>
        <section>
            <div class="form-two-page">
                <div class="step-navigation">
                    <a href="#">Step 1</a>
                    <a href="#">Step 2</a>
                    <a href="#">Step 3</a>
                    <a href="#">Step 4</a>
                    <a href="#">Step 5</a>
                    <a class="active-step" href="#">Step 6</a>
                    <a href="#">Step 7</a>
                </div>
                <div class="forms-page-one">
                <p class="title-step">Step 6: Special Provisions for Bye-Laws (or organizational resolutions)</p>
                <label class="input-text">
                    <span class="title-input">If any</span>
                    <input type="text">
                </label>
                <label class="input-text">
                    <span class="title-input">Document</span>
                    <input type="text">
                </label>
                <div class="block-file">
                    Choose file
                    <input class="input-file" type="file">
                    <span class="add-file-icn">
                        <img src="/public/dist/img/VectorSmartObjec-3.svg" alt="">
                    </span>
                </div>
                <button class="btn-upload">UPLOAD MORE</button>
                <div class="bnt-navigation">
                    <a class="previous" href="#"><img src="/public/dist/img/arrow-left.svg" alt=""> PREVIOUS</a>
                    <a class="next" href="#">NEXT <img src="/public/dist/img/arrow-right.svg" alt=""></a>
                </div>
                </div>
            </div>
        </section>

        <h3 class="step-h">7</h3>
        <section>
            <div class="form-two-page">
                <div class="step-navigation">
                    <a href="#">Step 1</a>
                    <a href="#">Step 2</a>
                    <a href="#">Step 3</a>
                    <a href="#">Step 4</a>
                    <a href="#">Step 5</a>
                    <a href="#">Step 6</a>
                    <a class="active-step" href="#">Step 7</a>
                </div>
                <div class="forms-page-one">
                <p class="title-step">Step 7: Applicant’s Particulars</p>
                <label class="input-text">
                    <span class="title-input">Name of applicant</span>
                    <input type="text">
                </label>
                <label class="input-text">
                    <span class="title-input">Address</span>
                    <input type="text">
                </label>
                <div class="date">
                    <div class="aft-non">
                        <p>Telephone number</p>
                        <input class="inp-date" type="text">
                    </div>
                    <div class="aft-non">
                        <p>Email</p>
                        <input class="inp-date" type="text">
                    </div>
                </div>
                <div class="bnt-navigation">
                    <a class="previous" href="#"><img src="/public/dist/img/arrow-left.svg" alt=""> PREVIOUS</a>
                    <input class="btn-submit step-submit" type="submit" value=" FINISH ">
                </div>
                </div>
            </div>
        </section>
    </form>







@endsection