@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-flex" id="wrapper">
            <div class="row">
                @include('cabinet.partials.cabinetSidebar')
                <div id="page-content-wrapper">
                    <div class="container-fluid" style="margin-left: 15px;">
                     @include('cabinet.partials.cabinetBtn')
                    <div class="row">
                        <!-- Cards List -->
                        <div class="col-sm-6">
                            <div class="card" style="margin: 1.75rem auto;">
                                <div class="card-header">
                                    <h4>How did i learn <i class="pull-right fas fa-arrow-circle-down"></i></h4>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it's not genuine, correct, or comprehensible Latin anymore.</p>
                                </div>
                                <div class="card-footer">
                                    <small>Last updated 3 mins ago</small>
                                    <div class="pull-right">
                                        <i class="far fa-thumbs-up">5</i>
                                        <i class="far fa-eye">112</i>
                                        <i class="far fa-comment">3</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card" style="margin: 1.75rem auto;">
                                <div class="card-header bg-info text-white">
                                    <h4>How did i learn <i class="pull-right fas fa-arrow-circle-down"></i></h4>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it's not genuine, correct, or comprehensible Latin anymore.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small>Last updated 3 mins ago</small>
                                        <div class="pull-right">
                                        <i class="far fa-thumbs-up">5</i>
                                        <i class="far fa-eye">112</i>
                                        <i class="far fa-comment">3</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card" style="margin: 1.75rem auto;">
                                <div class="card-header bg-warning text-white">
                                    <h4>How did i learn <i class="pull-right fas fa-arrow-circle-down"></i></h4>
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it's not genuine, correct, or comprehensible Latin anymore.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small>Last updated 3 mins ago</small>
                                        <div class="pull-right">
                                        <i class="far fa-thumbs-up">5</i>
                                        <i class="far fa-eye">112</i>
                                        <i class="far fa-comment">3</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
