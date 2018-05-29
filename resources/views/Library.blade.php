@extends('layout.app')

@section('content')

<div class="form-two-page">
    <div class="navigation-two-page">
        <a href="#">Terms Submission</a>
        <a class="activ-page-btn" href="#">Library of Terms & Conditions</a>
        <a href="#">Submitted Terms</a>
    </div>
    <div class="forms-page-one">
        <div class="search">
            <input class="input-btn" type="text">
            <img src="public/dist/img/Object.png" alt="">
            <input class="search-btn" type="submit" value="search">
            <div class="select-block mini-sel">
                <select>
                    <option value="hide"></option>
                    <option value="2010">General Terms & Conditions</option>
                    <option value="2011">Terms & Conditions of Sale</option>
                    <option value="2012">Terms & Conditions of Service</option>
                    <option value="2013">Terms & Conditions of Use</option>
                </select>
            </div>
        </div>
        <p class="title-search">Results: All categories</p>
        <div class="search-block">
            The Term of the Agreement shall commence on the Start Date and end on the End Date, both as specified on the Agreement Introduction here of (the "Term").
        </div>
        <div class="search-block">
            2.1 PARTY A shall procure that the PARTY B provides to PARTY A, the services as described in the Content Body hereof (the "Services") during the Term and if in the Content Body, PARTY A shall ensure that the PARTY B shall <a href="#">. . . more</a>
        </div>
        <div class="search-block">
            2.2 PARTY B shall ensure that it will apply to the provision of the Services such skill and expertise as should reasonably be expected and follow all current industry best practices as shall enable the Services to be provided pro  <a href="#">. . . more</a>
        </div>
        <div class="search-block">
            2.3 PARTY A and PARTY B shall not be under any obligation to use other companies and/or contractors to provide the Services during the Term for any minimum number of days.
        </div>
        <div class="search-block">
            2.4 PARTY A shall be entitled during and after the Term to retain other companies and/or contractors to provide services, whether of the same kind as, or similar to the Services.
        </div>
        <div class="search-block">
            2.5 If PARTY B is unable to make himself/herself available to PARTY A to provide the Services for any period due to sickness or injury during the Term, PARTY B shall ensure that it notifies PARTY A as soon as possible. PARTY B  <a href="#">. . . more</a>
        </div>

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

@endsection