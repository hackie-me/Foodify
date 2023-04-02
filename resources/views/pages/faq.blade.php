@extends('main')

@push('title')
    <title>Dashboard</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <x-bread-crump url="faq" title="FAQ"/>

            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Default FAQ</h6>
                </div>

                <div class="ms-panel-body">
                    <div class="accordion" id="accordionExample1">
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseOne"
                                 aria-expanded="true" aria-controls="collapseOne">
                                <span> Lorem Ipsum has been the industry standard dummy text </span>
                            </div>

                            <div id="collapseOne" class="collapse show" data-parent="#accordionExample1">
                                <div class="card-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                                    approaches to corporate strategy foster collaborative thinking to further the overall value
                                    proposition.
                                    Organically grow the holistic world view of disruptive innovation via workplace diversity and
                                    empowerment.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseTwo"
                                 aria-expanded="false" aria-controls="collapseTwo">
                                <span> Lorem Ipsum has been the industry standard dummy text</span>
                            </div>

                            <div id="collapseTwo" class="collapse" data-parent="#accordionExample1">
                                <div class="card-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                                    approaches to corporate strategy foster collaborative thinking to further the overall value
                                    proposition.
                                    Organically grow the holistic world view of disruptive innovation via workplace diversity and
                                    empowerment.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>FAQ with Gap</h6>

                </div>

                <div class="ms-panel-body">
                    <div class="accordion has-gap ms-accordion-chevron" id="accordionExample2">
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseFour"
                                 aria-expanded="true" aria-controls="collapseFour">
                                <span> Lorem Ipsum has been the industry standard dummy text </span>
                            </div>

                            <div id="collapseFour" class="collapse show" data-parent="#accordionExample2">
                                <div class="card-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                                    approaches to corporate strategy foster collaborative thinking to further the overall value
                                    proposition.
                                    Organically grow the holistic world view of disruptive innovation via workplace diversity and
                                    empowerment.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseFive"
                                 aria-expanded="false" aria-controls="collapseFive">
                                <span> Lorem Ipsum has been the industry standard dummy text </span>
                            </div>

                            <div id="collapseFive" class="collapse" data-parent="#accordionExample2">
                                <div class="card-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                                    approaches to corporate strategy foster collaborative thinking to further the overall value
                                    proposition.
                                    Organically grow the holistic world view of disruptive innovation via workplace diversity and
                                    empowerment.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseSix"
                                 aria-expanded="false" aria-controls="collapseSix">
                                <span> Lorem Ipsum has been the industry standard dummy text </span>
                            </div>

                            <div id="collapseSix" class="collapse" data-parent="#accordionExample2">
                                <div class="card-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                                    approaches to corporate strategy foster collaborative thinking to further the overall value
                                    proposition.
                                    Organically grow the holistic world view of disruptive innovation via workplace diversity and
                                    empowerment.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>FAQ with Icon</h6>

                </div>

                <div class="ms-panel-body">
                    <div class="accordion" id="accordionExample3">
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseSeven"
                                 aria-expanded="true" aria-controls="collapseSeven">
                    <span class="has-icon"> <i class="flaticon-email"></i> Lorem Ipsum has been the industry standard
                      dummy text </span>
                            </div>

                            <div id="collapseSeven" class="collapse show" data-parent="#accordionExample3">
                                <div class="card-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                                    approaches to corporate strategy foster collaborative thinking to further the overall value
                                    proposition.
                                    Organically grow the holistic world view of disruptive innovation via workplace diversity and
                                    empowerment.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseEight"
                                 aria-expanded="false" aria-controls="collapseEight">
                    <span class="has-icon"> <i class="flaticon-start"></i> Lorem Ipsum has been the industry standard
                      dummy text </span>
                            </div>

                            <div id="collapseEight" class="collapse" data-parent="#accordionExample3">
                                <div class="card-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                                    approaches to corporate strategy foster collaborative thinking to further the overall value
                                    proposition.
                                    Organically grow the holistic world view of disruptive innovation via workplace diversity and
                                    empowerment.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseNine"
                                 aria-expanded="false" aria-controls="collapseNine">
                    <span class="has-icon"> <i class="flaticon-conversation"></i> Lorem Ipsum has been the industry
                      standard dummy text </span>
                            </div>

                            <div id="collapseNine" class="collapse" data-parent="#accordionExample3">
                                <div class="card-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                                    approaches to corporate strategy foster collaborative thinking to further the overall value
                                    proposition.
                                    Organically grow the holistic world view of disruptive innovation via workplace diversity and
                                    empowerment.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection

@section('page-scripts')

@endsection
