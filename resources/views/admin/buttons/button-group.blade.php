@extends('layouts.admin')

@section('main-content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Button group</strong><span class="small ms-1">Basic example</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>. Add on optional JavaScript radio and checkbox style behavior with <a href="https://coreui.io/docs/components/buttons/#button-plugin">our buttons plugin</a>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-972" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#basic-example" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-972">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button class="btn btn-primary" type="button">Left</button>
                      <button class="btn btn-primary" type="button">Middle</button>
                      <button class="btn btn-primary" type="button">Right</button>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">These classes can also be added to groups of links, as an alternative to the <a href="https://coreui.io/docs/components/navs-tabs/"><code>.nav</code> navigation components</a>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-979" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#basic-example" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-979">
                    <div class="btn-group"><a class="btn btn-primary active" href="#" aria-current="page">Active link</a><a class="btn btn-primary" href="#">Link</a><a class="btn btn-primary" href="#">Link</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Button group</strong><span class="small ms-1">Mixed styles</span></div>
            <div class="card-body">
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-893" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#mixed-styles" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-893">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                      <button class="btn btn-danger" type="button">Left</button>
                      <button class="btn btn-warning" type="button">Middle</button>
                      <button class="btn btn-success" type="button">Right</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header">Outlined styles</div>
            <div class="card-body">
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1071" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#outlined-styles" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1071">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                      <button class="btn btn-outline-primary" type="button">Left</button>
                      <button class="btn btn-outline-primary" type="button">Middle</button>
                      <button class="btn btn-outline-primary" type="button">Right</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Button group</strong><span class="small ms-1">Checkbox and radio button groups</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Combine button-like checkbox and radio <a href="https://coreui.io/docs/forms/checks-radios/">toggle buttons</a> into a seamless looking button group.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-246" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#checkbox-and-radio-button-groups" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-246">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                      <input class="btn-check" id="btncheck1" type="checkbox" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>
                      <input class="btn-check" id="btncheck2" type="checkbox" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>
                      <input class="btn-check" id="btncheck3" type="checkbox" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-770" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#checkbox-and-radio-button-groups" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-770">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                      <input class="btn-check" id="btnradio1" type="radio" name="btnradio" autocomplete="off" checked="">
                      <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                      <input class="btn-check" id="btnradio2" type="radio" name="btnradio" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                      <input class="btn-check" id="btnradio3" type="radio" name="btnradio" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Button group</strong><span class="small ms-1">Button toolbar</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Join sets of button groups into button toolbars for more complicated components. Use utility classes as needed to space out groups, buttons, and more.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-388" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#button-toolbar" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-388">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group me-2" role="group" aria-label="First group">
                        <button class="btn btn-primary" type="button">1</button>
                        <button class="btn btn-primary" type="button">2</button>
                        <button class="btn btn-primary" type="button">3</button>
                        <button class="btn btn-primary" type="button">4</button>
                      </div>
                      <div class="btn-group me-2" role="group" aria-label="Second group">
                        <button class="btn btn-secondary" type="button">5</button>
                        <button class="btn btn-secondary" type="button">6</button>
                        <button class="btn btn-secondary" type="button">7</button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Third group">
                        <button class="btn btn-info" type="button">8</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Feel free to combine input groups with button groups in your toolbars. Similar to the example above, you’ll likely need some utilities through to space items correctly.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-884" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#button-toolbar" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-884">
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group me-2" role="group" aria-label="First group">
                        <button class="btn btn-outline-secondary" type="button">1</button>
                        <button class="btn btn-outline-secondary" type="button">2</button>
                        <button class="btn btn-outline-secondary" type="button">3</button>
                        <button class="btn btn-outline-secondary" type="button">4</button>
                      </div>
                      <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon">@</div>
                        <input class="form-control" type="text" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
                      </div>
                    </div>
                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group" role="group" aria-label="First group">
                        <button class="btn btn-outline-secondary" type="button">1</button>
                        <button class="btn btn-outline-secondary" type="button">2</button>
                        <button class="btn btn-outline-secondary" type="button">3</button>
                        <button class="btn btn-outline-secondary" type="button">4</button>
                      </div>
                      <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon2">@</div>
                        <input class="form-control" type="text" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Button group</strong><span class="small ms-1">Sizing</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Alternatively, of implementing button sizing classes to each button in a group, add <code>.btn-group-*</code> to all <code>.btn-group</code>, including each one when nesting multiple groups.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-604" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#sizing" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-604">
                    <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                      <button class="btn btn-outline-dark" type="button">Left</button>
                      <button class="btn btn-outline-dark" type="button">Middle</button>
                      <button class="btn btn-outline-dark" type="button">Right</button>
                    </div><br>
                    <div class="btn-group" role="group" aria-label="Default button group">
                      <button class="btn btn-outline-dark" type="button">Left</button>
                      <button class="btn btn-outline-dark" type="button">Middle</button>
                      <button class="btn btn-outline-dark" type="button">Right</button>
                    </div><br>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                      <button class="btn btn-outline-dark" type="button">Left</button>
                      <button class="btn btn-outline-dark" type="button">Middle</button>
                      <button class="btn btn-outline-dark" type="button">Right</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Button group</strong><span class="small ms-1">Nesting</span><a class="anchorjs-link" aria-label="Anchor" data-anchorjs-icon="#" href="#nesting" style="padding-left: 0.375em;"></a></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Put a <code>.btn-group</code> inside another <code>.btn-group</code> when you need dropdown menus combined with a series of buttons.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-982" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#nesting" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-982">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                      <button class="btn btn-primary" type="button">1</button>
                      <button class="btn btn-primary" type="button">2</button>
                      <div class="btn-group" role="group">
                        <button class="btn btn-primary dropdown-toggle" id="btnGroupDrop1" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Button group</strong><span class="small ms-1">Vertical variation</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Create a set of buttons that appear vertically stacked rather than horizontally. <strong>Split button dropdowns are not supported here.</strong></p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-330" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#vertical-variation" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-330">
                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                      <button class="btn btn-dark" type="button">Button</button>
                      <button class="btn btn-dark" type="button">Button</button>
                      <button class="btn btn-dark" type="button">Button</button>
                      <button class="btn btn-dark" type="button">Button</button>
                      <button class="btn btn-dark" type="button">Button</button>
                      <button class="btn btn-dark" type="button">Button</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-665" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#vertical-variation" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-665">
                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                      <button class="btn btn-primary" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                      <div class="btn-group" role="group">
                        <button class="btn btn-primary dropdown-toggle" id="btnGroupVerticalDrop1" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                      <button class="btn btn-primary" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                      <div class="btn-group" role="group">
                        <button class="btn btn-primary dropdown-toggle" id="btnGroupVerticalDrop2" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                      <div class="btn-group" role="group">
                        <button class="btn btn-primary dropdown-toggle" id="btnGroupVerticalDrop3" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                      <div class="btn-group" role="group">
                        <button class="btn btn-primary dropdown-toggle" id="btnGroupVerticalDrop4" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-689" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/button-group/#vertical-variation" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-689">
                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                      <input class="btn-check" id="vbtn-radio1" type="radio" name="vbtn-radio" autocomplete="off" checked="">
                      <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
                      <input class="btn-check" id="vbtn-radio2" type="radio" name="vbtn-radio" autocomplete="off">
                      <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
                      <input class="btn-check" id="vbtn-radio3" type="radio" name="vbtn-radio" autocomplete="off">
                      <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
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