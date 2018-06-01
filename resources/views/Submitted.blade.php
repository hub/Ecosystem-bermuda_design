@extends('layout.app')

@section('content')

<div class="form-two-page">
    <div class="navigation-two-page link-colum">
        <a href="#">Terms Submission</a>
        <a href="#">Library of Terms & Conditions</a>
        <a class="activ-page-btn" href="#">Submitted Terms</a>
    </div>
    <div class="forms-page-one">
        <div class="button-search">
            <div class="button-group">
                <button>NEW</button>
                <button>EDIT</button>
                <button>DELETE</button>
            </div>
            <div class="search">
                <input class="input-btn" type="text">
                <img src="public/dist/img/Object.png" alt="">
            </div>
        </div>

        <div class="table">
            <div class="line-tabs-title">
                <div class="tab-checkbox">
                    
                </div>
                <div class="tab-number">Term ID</div>
                <div class="tab-img">
                    Approve Status
                </div>
                <div class="tab-text">
                    Term Text
                </div>
            </div>
            <div class="line-tabs">
                <div class="tab-checkbox">
                    <label class="welkit-choice">
                        <input type="checkbox" >
                        <span class="check checkbox"></span>
                    </label>
                </div>
                <div class="tab-number">7</div>
                <div class="tab-img">
                    <img src="public/dist/img/checked.png" alt="">
                </div>
                <div class="tab-text">
                    The Term of the Agreement shall commence on the Start Date and end on the End Date, both as specified on the . . . >>
                </div>
            </div>
            <div class="line-tabs">
                <div class="tab-checkbox">
                    <label class="welkit-choice">
                        <input type="checkbox" >
                        <span class="check checkbox"></span>
                    </label>
                </div>
                <div class="tab-number">15</div>
                <div class="tab-img">
                        <img src="public/dist/img/no-check.png" alt="">
                </div>
                <div class="tab-text">
                    2.1 PARTY A shall procure that the PARTY B provides to PARTY A, the services as described in the Content Body h . . . >>
                </div>
            </div>
            <div class="line-tabs">
                <div class="tab-checkbox">
                    <label class="welkit-choice">
                        <input type="checkbox" >
                        <span class="check checkbox"></span>
                    </label>
                </div>
                <div class="tab-number">16</div>
                <div class="tab-img">
                    <img src="public/dist/img/checked.png" alt="">
                </div>
                <div class="tab-text">
                    2.2 PARTY B shall ensure that it will apply to the provision of the Services such skill and expertise as should reasona . . . >>
                </div>
            </div>
            <div class="line-tabs">
                <div class="tab-checkbox">
                    <label class="welkit-choice">
                        <input type="checkbox" >
                        <span class="check checkbox"></span>
                    </label>
                </div>
                <div class="tab-number">52</div>
                <div class="tab-img">
                    <img src="public/dist/img/checked.png" alt="">
                </div>
                <div class="tab-text">
                    2.3 PARTY A and PARTY B shall not be under any obligation to use other companies and/or contractors to provide . . . >>
                </div>
            </div>
            <div class="line-tabs">
                <div class="tab-checkbox">
                    <label class="welkit-choice">
                        <input type="checkbox" >
                        <span class="check checkbox"></span>
                    </label>
                </div>
                <div class="tab-number">114</div>
                <div class="tab-img">
                    <img src="public/dist/img/checked.png" alt="">
                </div>
                <div class="tab-text">
                    2.4 PARTY A shall be entitled during and after the Term to retain other companies and/or contractors to provide serv . . . >>
                </div>
            </div>
            <div class="line-tabs">
                <div class="tab-checkbox">
                    <label class="welkit-choice">
                        <input type="checkbox" >
                        <span class="check checkbox"></span>
                    </label>
                </div>
                <div class="tab-number">128</div>
                <div class="tab-img">
                    <img src="public/dist/img/no-check.png" alt="">
                </div>
                <div class="tab-text">
                    2.5 If PARTY B is unable to make himself/herself available to PARTY A to provide the Services for any period due . . . >>
                </div>
            </div>
            <div class="line-tabs">
                <div class="tab-checkbox">
                    <label class="welkit-choice">
                        <input type="checkbox" >
                        <span class="check checkbox"></span>
                    </label>
                </div>
                <div class="tab-number">337</div>
                <div class="tab-img">
                    <img src="public/dist/img/checked.png" alt="">
                </div>
                <div class="tab-text">
                    2.6 PARTY A shall not be under any obligation to use any of the Work created by the PARTY B in provision of the Ser . . . >>
                </div>
            </div>
        </div>

        <div class="pagin-page">
           <p>Show 1 to 7 of 67 entries</p>
           <nav aria-label="Page navigation example" class="page-nav">
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link c-first" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                    <a class="page-link c-last" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection