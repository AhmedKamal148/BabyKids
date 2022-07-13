@extends('User.userMaster')

@section('content')
    @include('User.components.slider')

    <section class="ourActivities py-3 ">
        <div class="container">
            <header  class="text-capitalize">
                <h2 class="font-weight-bold">
                    Our Activites
                </h2>
                <p class="text-muted ml-1">
                    Our Best Service For Your Kids
                </p>
            </header>

            <section class="activity mt-5">
                <div class="row">
                    @foreach($activities as $activity)
                    <div class="col-lg-4 mb-3">
                        <div class="activity_info d-flex ">
                            <div class="activity_info-icon mr-2">
                                <div class="icon">
                                    <i class=" {{ $activity->icon}}"></i>
                                </div>
                            </div>
                            <div class="activity_info-body">
                                <h3 class="font-weight-bold">
                                    {{ $activity->title}}
                                </h3>
                                <p class="text-muted">
                                    {{ $activity->slug}}
                                </p>
                                <a class="body_icon text-muted text-capitalize">
                                    <span class="icon-img"> <i class="fas fa-angle-right fa-1x"></i></span>
                                    <span class="icon-word">more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </section>

    @include('User.components.dependencyComp.layerSection1')
@endsection
