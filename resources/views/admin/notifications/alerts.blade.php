@extends('layouts.admin')

@section('main-content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-6">
          <div class="card mb-4">
            <div class="card-header"><strong>Alerts</strong></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Bootstrap alert is prepared for any length of text, as well as an optional close button. For a styling, use one of the <strong>required</strong> contextual classes (e.g.,<code>.alert-success</code>).</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-167" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/alerts/#examples" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-167">
                    <div class="alert alert-primary" role="alert">This is a primary alert—check it out!</div>
                    <div class="alert alert-secondary" role="alert">This is a secondary alert—check it out!</div>
                    <div class="alert alert-success" role="alert">This is a success alert—check it out!</div>
                    <div class="alert alert-danger" role="alert">This is a danger alert—check it out!</div>
                    <div class="alert alert-warning" role="alert">This is a warning alert—check it out!</div>
                    <div class="alert alert-info" role="alert">This is a info alert—check it out!</div>
                    <div class="alert alert-light" role="alert">This is a light alert—check it out!</div>
                    <div class="alert alert-dark" role="alert">This is a dark alert—check it out!</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-4">
            <div class="card-header"><strong>Alerts</strong><span class="small ms-1">Link color</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use the <code>.alert-link</code> utility class to immediately give matching colored links inside any alert.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-661" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/alerts/#link-color" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-661">
                    <div class="alert alert-primary" role="alert">This is a primary alert with <a class="alert-link" href="#">an example link</a>. Give it a click if you like.</div>
                    <div class="alert alert-secondary" role="alert">This is a secondary alert with <a class="alert-link" href="#">an example link</a>. Give it a click if you like.</div>
                    <div class="alert alert-success" role="alert">This is a success alert with <a class="alert-link" href="#">an example link</a>. Give it a click if you like.</div>
                    <div class="alert alert-danger" role="alert">This is a danger alert with <a class="alert-link" href="#">an example link</a>. Give it a click if you like.</div>
                    <div class="alert alert-warning" role="alert">This is a warning alert with <a class="alert-link" href="#">an example link</a>. Give it a click if you like.</div>
                    <div class="alert alert-info" role="alert">This is a info alert with <a class="alert-link" href="#">an example link</a>. Give it a click if you like.</div>
                    <div class="alert alert-light" role="alert">This is a light alert with <a class="alert-link" href="#">an example link</a>. Give it a click if you like.</div>
                    <div class="alert alert-dark" role="alert">This is a dark alert with <a class="alert-link" href="#">an example link</a>. Give it a click if you like.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
      <div class="row">
        <div class="col-lg-6">
          <div class="card mb-4">
            <div class="card-header"><strong>Alerts</strong><span class="small ms-1">Additional content</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Alert can also incorporate supplementary HTML elements like heading, paragraph, and divider.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-208" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/alerts/#additional-content" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-208">
                    <div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Well done!</h4>
                      <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                      <hr>
                      <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
        <div class="col-lg-6">
          <div class="card mb-4">
            <div class="card-header"><strong>Alerts</strong><span class="small ms-1">Dismissing</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Using the JavaScript plugin, it’s possible to remove any alert.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-668" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/alerts/#dismissing" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-668">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <div class="fw-semibold">Holy guacamole!</div> You should check in on some of those fields below.
                      <button class="btn-close" type="button" data-coreui-dismiss="alert" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row-->
    </div>
</div>
@endsection