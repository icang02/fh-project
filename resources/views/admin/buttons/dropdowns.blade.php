@extends('layouts.admin')

@section('main-content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Single button</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Each single <code>.btn</code> can be changed into a dropdown toggle with small changes. Here’s how you can put them to work with either <code> &lt;button&gt;</code> elements:</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-157" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#single-button" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-157">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown button</button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">And with <code> &lt;a&gt;</code> elements:</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-290" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#single-button" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-290">
                    <div class="dropdown"><a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" href="#" role="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown link</a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">The best part is you can do this with any button variant, too:</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-109" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#single-button" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-109">
                    <div class="btn-group">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Primary</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Secondary</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-success dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Success</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-info dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Info</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-warning dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Warning</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Danger</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Split button</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code>.dropdown-toggle-split</code> for proper spacing around the dropdown caret.</p>
              <p class="text-medium-emphasis small">We use this extra class to reduce the horizontal <code>padding</code> on either side of the caret by 25% and remove the <code>margin-left</code> that’s attached for normal button dropdowns. Those additional changes hold the caret centered in the split button and implement a more properly sized hit area next to the main button.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1067" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#split-button" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1067">
                    <div class="btn-group">
                      <button class="btn btn-primary" type="button">Primary</button>
                      <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-secondary" type="button">Secondary</button>
                      <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-success" type="button">Success</button>
                      <button class="btn btn-success dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-info" type="button">Info</button>
                      <button class="btn btn-info dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-warning" type="button">Warning</button>
                      <button class="btn btn-warning dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-danger" type="button">Danger</button>
                      <button class="btn btn-danger dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Sizing</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-441" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#sizing" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-441">
                    <div class="btn-group">
                      <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Large button</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-lg btn-secondary" type="button">Large split button</button>
                      <button class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1140" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#sizing" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1140">
                    <div class="btn-group">
                      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Small button</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-secondary" type="button">Small split button</button>
                      <button class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Dark dropdowns</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Opt into darker dropdowns to match a dark navbar or custom style by adding <code>.dropdown-menu-dark</code> onto an existing <code>.dropdown-menu</code>. No changes are required to the dropdown items.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-322" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#dark-dropdowns" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-322">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton2" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown button</button>
                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">And putting it to use in a navbar:</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1046" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#dark-dropdowns" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1046">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                      <div class="container-fluid"><a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-coreui-toggle="collapse" data-coreui-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" href="#" role="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</a>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Dropup</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1219" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#dropup" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1219">
                    <div class="btn-group dropup">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropup</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group dropup">
                      <button class="btn btn-secondary" type="button">Split dropup</button>
                      <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Dropright</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Trigger dropdown menus at the right of the elements by adding <code>.dropend</code> to the parent element.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-971" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#dropright" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-971">
                    <div class="btn-group dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropright</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group dropend">
                      <button class="btn btn-secondary" type="button">Split dropend</button>
                      <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropright</span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Dropleft</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Trigger dropdown menus at the left of the elements by adding <code>.dropstart</code> to the parent element.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-543" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#dropleft" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-543">
                    <div class="btn-group dropstart">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropleft</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <div class="btn-group dropstart" role="group">
                        <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropleft</span></button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                      </div>
                      <button class="btn btn-secondary" type="button">Split dropstart</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Menu items</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Historically dropdown menu contents <em>had</em> to be links, but that’s no longer the case with v4. Now you can optionally use <code> &lt;button&gt;</code> elements in your dropdowns instead of just <code> &lt;a&gt;</code>s.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-150" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#menu-items" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-150">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" id="dropdownMenu2" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li>
                          <button class="dropdown-item" type="button">Action</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button">Another action</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button">Something else here</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">You can also create non-interactive dropdown items with <code>.dropdown-item-text</code>. Feel free to style further with custom CSS or text utilities.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-929" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#menu-items" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-929">
                    <ul class="dropdown-menu">
                      <li><span class="dropdown-item-text">Dropdown item text</span></li>
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Active</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Add <code>.active</code> to items in the dropdown to <strong>style them as active</strong>. To convey the active state to assistive technologies, use the <code>aria-current</code> attribute — using the <code>page</code> value for the current page, or <code>true</code> for the current item in a set.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-828" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#active" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-828">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Regular link</a></li>
                      <li><a class="dropdown-item active" href="#" aria-current="true">Active link</a></li>
                      <li><a class="dropdown-item" href="#">Another link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Disabled</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Add <code>.disabled</code> to items in the dropdown to <strong>style them as disabled</strong>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1088" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#disabled" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1088">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Regular link</a></li>
                      <li><a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Disabled link</a></li>
                      <li><a class="dropdown-item" href="#">Another link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Menu alignment</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. Add <code>.dropdown-menu-end</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-895" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#menu-alignment" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-895">
                    <div class="btn-group">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Right-aligned menu example</button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <button class="dropdown-item" type="button">Action</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button">Another action</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button">Something else here</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Responsive alignment</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">If you want to use responsive alignment, disable dynamic positioning by adding the <code>data-coreui-display="static"</code> attribute and use the responsive variation classes.</p>
              <p class="text-medium-emphasis small">To align <strong>right</strong> the dropdown menu with the given breakpoint or larger, add <code>.dropdown-menu{-sm|-md|-lg|-xl|-xxl}-end</code>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-85" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#responsive-alignment" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-85">
                    <div class="btn-group">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" data-coreui-display="static" aria-expanded="false">Left-aligned but right aligned when large screen</button>
                      <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li>
                          <button class="dropdown-item" type="button">Action</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button">Another action</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button">Something else here</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-240" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#responsive-alignment" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-240">
                    <div class="btn-group">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" data-coreui-display="static" aria-expanded="false">Right-aligned but left aligned when large screen</button>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li>
                          <button class="dropdown-item" type="button">Action</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button">Another action</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button">Something else here</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-890" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#responsive-alignment" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-890">
                    <div class="btn-group">
                      <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Right-aligned menu</button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" data-coreui-display="static" aria-expanded="false">Left-aligned, right-aligned lg</button>
                      <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" data-coreui-display="static" aria-expanded="false">Right-aligned, left-aligned lg</button>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                      </ul>
                    </div>
                    <div class="btn-group dropstart">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropstart</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                      </ul>
                    </div>
                    <div class="btn-group dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropend</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                      </ul>
                    </div>
                    <div class="btn-group dropup">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropup</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Headers</span></div>
              <div class="card-body">
                <p class="text-medium-emphasis small">Add a header to label sections of actions in any dropdown menu.</p>
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-910" role="tab">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#headers" target="_blank">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                        </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-910">
                      <ul class="dropdown-menu">
                        <li>
                          <h6 class="dropdown-header">Dropdown header</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Dividers</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Separate groups of related menu items with a divider.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1290" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#dividers" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1290">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Text</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Place any freeform text within a dropdown menu with text and use <a href="https://coreui.io/docs/utilities/spacing/">spacing utilities</a>. Note that you’ll likely need additional sizing styles to constrain the menu width.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1075" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#text" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1075">
                    <div class="dropdown-menu p-4 text-medium-emphasis" style="max-width: 200px;">
                      <p>Some example text that's free-flowing within the dropdown menu.</p>
                      <p class="mb-0">And this is more example text.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Dropdown</strong><span class="small ms-1">Forms</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Put a form within a dropdown menu, or make it into a dropdown menu, and use <a href="https://coreui.io/docs/utilities/spacing/">margin or padding utilities</a> to give it the negative space you require.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-589" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#forms" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-589">
                    <div class="dropdown-menu">
                      <form class="px-4 py-3">
                        <div class="mb-3">
                          <label class="form-label" for="exampleDropdownFormEmail1">Email address</label>
                          <input class="form-control" id="exampleDropdownFormEmail1" type="email" placeholder="email@example.com">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="exampleDropdownFormPassword1">Password</label>
                          <input class="form-control" id="exampleDropdownFormPassword1" type="password" placeholder="Password">
                        </div>
                        <div class="mb-3">
                          <div class="form-check">
                            <input class="form-check-input" id="dropdownCheck" type="checkbox">
                            <label class="form-check-label" for="dropdownCheck">Remember me</label>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Sign in</button>
                      </form>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">New around here? Sign up</a><a class="dropdown-item" href="#">Forgot password?</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1139" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/dropdowns/#forms" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1139">
                    <form class="dropdown-menu p-4">
                      <div class="mb-3">
                        <label class="form-label" for="exampleDropdownFormEmail2">Email address</label>
                        <input class="form-control" id="exampleDropdownFormEmail2" type="email" placeholder="email@example.com">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="exampleDropdownFormPassword2">Password</label>
                        <input class="form-control" id="exampleDropdownFormPassword2" type="password" placeholder="Password">
                      </div>
                      <div class="mb-3">
                        <div class="form-check">
                          <input class="form-check-input" id="dropdownCheck2" type="checkbox">
                          <label class="form-check-label" for="dropdownCheck2">Remember me</label>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Sign in</button>
                    </form>
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