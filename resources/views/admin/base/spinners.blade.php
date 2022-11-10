@extends('layouts.admin')

@section('main-content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Spinner</strong><span class="small ms-1">Border</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use the border spinners for a lightweight loading indicator.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-545" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#border-spinner" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-545">
                    <div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Spinner</strong><span class="small ms-1">Colors</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">The border spinner uses <code>currentColor</code> for its <code>border-color</code>, meaning you can customize the color with <a href="https://coreui.io/docs/utilities/colors/">text color utilities</a>. You can use any of our text color utilities on the standard spinner.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1085" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#colors" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1085">
                    <div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-border text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-border text-success" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-border text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-border text-warning" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-border text-info" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-border text-dark" role="status"><span class="visually-hidden">Loading...</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Spinner</strong><span class="small ms-1">Growing</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-990" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#growing-spinner" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-990">
                    <div class="spinner-grow" role="status"><span class="visually-hidden">Loading...</span></div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Once again, this spinner is built with <code>currentColor</code>, so you can easily change its appearance with <a href="https://coreui.io/docs/utilities/colors/">text color utilities</a>. Here it is in blue, along with the supported variants.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-697" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#growing-spinner" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-697">
                    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-grow text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-grow text-success" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-grow text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-grow text-warning" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-grow text-info" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-grow text-light" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-grow text-dark" role="status"><span class="visually-hidden">Loading...</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Spinner</strong><span class="small ms-1">Alignment</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Spinners in Bootstrap are built with <code>rem</code>s, <code>currentColor</code>, and <code>display: inline-flex</code>. This means they can easily be resized, recolored, and quickly aligned.</p>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Spinner</strong><span class="small ms-1">Margin</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use <a href="https://coreui.io/docs/utilities/spacing/">margin utilities</a> like <code>.m-5</code> for easy spacing.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-766" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#alignment" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-766">
                    <div class="spinner-border m-5" role="status"><span class="visually-hidden">Loading...</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Spinner</strong><span class="small ms-1">Placement</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use <a href="https://coreui.io/docs/utilities/flex/">flexbox utilities</a>, <a href="https://coreui.io/docs/utilities/float/">float utilities</a>, or <a href="https://coreui.io/docs/content/typography/">text alignment</a> utilities to place spinners exactly where you need them in any situation.</p>
              <h4 id="flex">Flex<a class="anchorjs-link" aria-label="Anchor" data-anchorjs-icon="#" href="#flex" style="padding-left: 0.375em;"></a></h4>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-123" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#flex" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-123">
                    <div class="d-flex justify-content-center">
                      <div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-547" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#flex" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-547">
                    <div class="d-flex align-items-center"><strong>Loading...</strong>
                      <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                    </div>
                  </div>
                </div>
              </div>
              <h4 id="floats">Floats<a class="anchorjs-link" aria-label="Anchor" data-anchorjs-icon="#" href="#floats" style="padding-left: 0.375em;"></a></h4>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-525" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#floats" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-525">
                    <div class="clearfix">
                      <div class="spinner-border float-end" role="status"><span class="visually-hidden">Loading...</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <h4 id="text-align">Text align<a class="anchorjs-link" aria-label="Anchor" data-anchorjs-icon="#" href="#text-align" style="padding-left: 0.375em;"></a></h4>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1146" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#text-align" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1146">
                    <div class="text-center">
                      <div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Spinner</strong><span class="small ms-1">Size</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-117" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#size" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-117">
                    <div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-grow spinner-grow-sm" role="status"><span class="visually-hidden">Loading...</span></div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Or, use custom CSS or inline styles to change the dimensions as needed.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-759" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#size" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-759">
                    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="visually-hidden">Loading...</span></div>
                    <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"><span class="visually-hidden">Loading...</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Spinner</strong><span class="small ms-1">Buttons</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-232" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-232">
                    <button class="btn btn-primary" type="button" disabled=""><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="visually-hidden">Loading...</span></button>
                    <button class="btn btn-primary" type="button" disabled=""><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...</button>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-888" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/spinners/#buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-888">
                    <button class="btn btn-primary" type="button" disabled=""><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span class="visually-hidden">Loading...</span></button>
                    <button class="btn btn-primary" type="button" disabled=""><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Loading...</button>
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