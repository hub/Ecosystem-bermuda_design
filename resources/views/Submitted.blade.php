@extends('layout.app')

@section('content')

<div class="form-two-page">
    <div class="navigation-two-page">
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