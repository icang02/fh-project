@extends('layouts.admin')

@section('main-content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Popover</strong><span class="small ms-1">Basic example</span></div>
            <div class="card-body">
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-248" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/popovers/#example" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-248">
                    <button class="btn btn-lg btn-danger" type="button" data-coreui-toggle="popover" title="" data-coreui-content="And here's some amazing content. It's very engaging. Right?" data-coreui-original-title="Popover title">Click to toggle popover</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Popover</strong><span class="small ms-1">Four directions</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Four options are available: top, right, bottom, and left aligned. Directions are mirrored when using Bootstrap in RTL.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-673" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/popovers/#four-directions" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-673">
                    <button class="btn btn-secondary" type="button" data-coreui-container="body" data-coreui-toggle="popover" data-coreui-placement="top" data-coreui-content="Top popover" data-coreui-original-title="" title="">Popover on top</button>
                    <button class="btn btn-secondary" type="button" data-coreui-container="body" data-coreui-toggle="popover" data-coreui-placement="right" data-coreui-content="Right popover" data-coreui-original-title="" title="">Popover on right</button>
                    <button class="btn btn-secondary" type="button" data-coreui-container="body" data-coreui-toggle="popover" data-coreui-placement="bottom" data-coreui-content="Bottom popover" data-coreui-original-title="" title="">Popover on bottom</button>
                    <button class="btn btn-secondary" type="button" data-coreui-container="body" data-coreui-toggle="popover" data-coreui-placement="left" data-coreui-content="Left popover" data-coreui-original-title="" title="">Popover on left</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Popover</strong><span class="small ms-1">Dismiss on next click</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use the <code>focus</code> trigger to dismiss popovers on the user’s next click of a different element than the toggle element.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1054" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/popovers/#dismiss-on-next-click" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1054"><a class="btn btn-lg btn-danger" tabindex="0" role="button" data-coreui-toggle="popover" data-coreui-trigger="focus" title="" data-coreui-content="And here's some amazing content. It's very engaging. Right?" data-coreui-original-title="Dismissible popover">Dismissible popover</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12"></div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Popover</strong><span class="small ms-1">Disabled elements</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Elements with the <code>disabled</code> attribute aren’t interactive, meaning users cannot hover or click them to trigger a popover (or tooltip). As a workaround, you’ll want to trigger the popover from a wrapper <code> &lt;div&gt;</code> or <code> &lt;span&gt;</code>, ideally made keyboard-focusable using <code>tabindex="0"</code>.</p>
              <p class="text-medium-emphasis small">For disabled popover triggers, you may also prefer <code>data-coreui-trigger="hover focus"</code> so that the popover appears as immediate visual feedback to your users as they may not expect to <em>click</em> on a disabled element.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-644" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/popovers/#disabled-elements" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-644"><span class="d-inline-block" tabindex="0" data-coreui-toggle="popover" data-coreui-trigger="hover focus" data-coreui-content="Disabled popover" data-coreui-original-title="" title="">
                      <button class="btn btn-primary" type="button" disabled="">Disabled button</button></span>
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