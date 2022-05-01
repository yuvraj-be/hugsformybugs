@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ================================ links Events Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Event</span>
        <h3 class="page-title"><i class="icon-feather-file-text"></i> Edit Event</h3>
      </div>
    </div>
    <!-- ================================ links Events Content Start ========================================================================= -->
    <!-- End Page Header -->
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
          <div class="card-body">
              <!-- ================================ links Events Content Start ========================================================================= -->
              <form class="add-new-post" action="{{ route('dashboardEvents.update',$Event->slug) }}" method="POST"  role="form" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <!-- ================================ links Events Content Start ========================================================================= -->
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Title" name="Title_en" value="{{ $Event->Title_en }}">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Slug" name="slug" value="{{ $Event->slug }}">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Days" name="Days" value="{{ $Event->Days }}">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Hours" name="Hours" value="{{ $Event->Hours }}">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Minutes" name="Minutes" value="{{ $Event->Minutes }}">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Address" name="Address" value="{{ $Event->Address }}">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event FinishTime" name="FinishTime" value="{{ $Event->FinishTime }}">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event StartTime" name="StartTime" value="{{ $Event->StartTime }}">
              <textarea value="{{ $Event->Content_en }}" class="form-control form-control-lg mb-3" type="text" name="Content_en" rows="15">
              <!-- ================================ links Events Content Start ========================================================================= -->
                {{ $Event->Content_en }}
              </div>
            </div>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ================================ links Events Content Start ========================================================================= -->
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <h6 class="m-0">Actions</h6>
          </div>
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-flag mr-1"></i>
                  <strong class="mr-1">Status:</strong> Draft
                </span>
                <span class="d-flex mb-2">
                  <i class="icon-material-outline-visibility mr-1"></i>
                  <strong class="mr-1">Visibility:</strong>
                  <strong class="text-success">Public</strong>
                </span>
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-calendar mr-1"></i>
                  <strong class="mr-1">Schedule:</strong> Now
                </span>
                <span class="d-flex">
                  <i class="icon-line-awesome-bullseye mr-1"></i>
                  <strong class="mr-1">Readability:</strong>
                  <strong class="text-warning">Ok</strong>
                </span>
              </li>
              <li class="list-group-item d-flex px-3">
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Publish</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ================================ links Events Content Start ======================================================= -->
            <!-- / Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Event Image</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="{!! asset($Event->image) !!}" alt="Event image">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="" value="{{ $Event->image }}">
                    </label>
                  </div>
                </ul>
                </form>
              </div>
            </div>
            <!-- ================================ links Events Content Start ======================================================== -->
            <!-- / Post Overview -->
          </div>
        </div>
      </div>
<!-- ================================ links Events Content Start ========================================================================= -->
@endsection
