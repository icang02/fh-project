@extends('layouts.admin')

@section('main-content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Range</strong></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Create custom <code>&lt;input type="range"&gt;</code> controls with <code>.form-range</code>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-231" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/range/#overview" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-231">
                    <label class="form-label" for="customRange1">Example range</label>
                    <input class="form-range" id="customRange1" type="range">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Range</strong><span class="small ms-1">Disabled</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Add the <code>disabled</code> boolean attribute on an input to give it a grayed out appearance and remove pointer events.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-773" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/range/#disabled" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-773">
                    <label class="form-label" for="disabledRange">Disabled range</label>
                    <input class="form-range" id="disabledRange" type="range" disabled="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Range</strong><span class="small ms-1">Min and max</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Range inputs have implicit values for <code>min</code> and <code>max</code>— <code>0</code> and <code>100</code>, respectively. You may specify new values for those using the <code>min</code> and <code>max</code> attributes.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-639" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/range/#min-and-max" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-639">
                    <label class="form-label" for="customRange2">Example range</label>
                    <input class="form-range" id="customRange2" type="range" min="0" max="5">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Range</strong><span class="small ms-1">Steps</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">By default, range inputs “snap” to integer values. To change this, you can specify a <code>step</code> value. In the example below, we double the number of steps by using <code>step="0.5"</code>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1053" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/range/#steps" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1053">
                    <label class="form-label" for="customRange3">Example range</label>
                    <input class="form-range" id="customRange3" type="range" min="0" max="5" step="0.5">
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