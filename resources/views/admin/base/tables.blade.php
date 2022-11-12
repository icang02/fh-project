@extends('layouts.admin')

@section('main-content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="car"></div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Basic example</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Using the most basic table markup, here’s how <code>.table</code>-based tables look in Bootstrap.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-387" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#overview" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Variants</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Use contextual classes to color tables, table rows or individual cells.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-132" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#variants" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-132">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Class</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Default</th>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr class="table-primary">
                      <th scope="row">Primary</th>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr class="table-secondary">
                      <th scope="row">Secondary</th>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr class="table-success">
                      <th scope="row">Success</th>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr class="table-danger">
                      <th scope="row">Danger</th>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr class="table-warning">
                      <th scope="row">Warning</th>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr class="table-info">
                      <th scope="row">Info</th>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr class="table-light">
                      <th scope="row">Light</th>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr class="table-dark">
                      <th scope="row">Dark</th>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Striped rows</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Use <code>.table-striped</code> to add zebra-striping to any table row within the <code> &lt;tbody&gt;</code>.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-681" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#striped-rows" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-681">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <p class="text-medium-emphasis small">These classes can also be added to table variants:</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-907" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#striped-rows" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-907">
                <table class="table table-dark table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-877" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#striped-rows" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-877">
                <table class="table table-success table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Hoverable rows</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Add <code>.table-hover</code> to enable a hover state on table rows within a <code> &lt;tbody&gt;</code>.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-277" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#hoverable-rows" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-277">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-400" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#hoverable-rows" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-400">
                <table class="table table-dark table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <p class="text-medium-emphasis small">These hoverable rows can also be combined with the striped variant:</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-587" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#hoverable-rows" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-587">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Active tables</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Highlight a table row or cell by adding a <code>.table-active</code> class.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-501" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#active-tables" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-501">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-active">
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td class="table-active" colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-710" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#active-tables" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-710">
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-active">
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td class="table-active" colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Bordered tables</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-84" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#bordered-tables" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-84">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <p class="text-medium-emphasis small"><a href="https://coreui.io/docs/utilities/borders/#border-color">Border color utilities</a> can be added to change colors:</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-398" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#bordered-tables" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-398">
                <table class="table table-bordered border-primary">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Tables without borders</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Add <code>.table-borderless</code> for a table without borders.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-932" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#tables-without-borders" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-932">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-809" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#tables-without-borders" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-809">
                <table class="table table-dark table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Small tables</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Add <code>.table-sm</code> to make any <code>.table</code> more compact by cutting all cell <code>padding</code> in half.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1255" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#small-tables" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1255">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1079" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#small-tables" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1079">
                <table class="table table-dark table-sm">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Vertical alignment</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Table cells of <code> &lt;thead&gt;</code> are always vertical aligned to the bottom. Table cells in <code> &lt;tbody&gt;</code> inherit their alignment from <code> &lt;table&gt;</code> and are aligned to the the top by default. Use the <a href="https://coreui.io/docs/utilities/vertical-align/">vertical align</a> classes to re-align where needed.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1291" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#vertical-alignment" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1291">
                <div class="table-responsive">
                  <table class="table align-middle">
                    <thead>
                      <tr>
                        <th class="w-25" scope="col">Heading 1</th>
                        <th class="w-25" scope="col">Heading 2</th>
                        <th class="w-25" scope="col">Heading 3</th>
                        <th class="w-25" scope="col">Heading 4</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                        <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                      </tr>
                      <tr class="align-bottom">
                        <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                        <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                        <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                        <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                      </tr>
                      <tr>
                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                        <td class="align-top">This cell is aligned to the top.</td>
                        <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Nesting</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Border styles, active styles, and table variants are not inherited by nested tables.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-605" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#nesting" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-605">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <td colspan="4">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th scope="col">Header</th>
                              <th scope="col">Header</th>
                              <th scope="col">Header</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">A</th>
                              <td>First</td>
                              <td>Last</td>
                            </tr>
                            <tr>
                              <th scope="row">B</th>
                              <td>First</td>
                              <td>Last</td>
                            </tr>
                            <tr>
                              <th scope="row">C</th>
                              <td>First</td>
                              <td>Last</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Table head</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">Similar to tables and dark tables, use the modifier classes <code>.table-light</code> or <code>.table-dark</code> to make <code> &lt;thead&gt;</code>s appear light or dark gray.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-566" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#table-head" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-566">
                <table class="table">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-942" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#table-head" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-942">
                <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Table foot</span></div>
        <div class="card-body">
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-275" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#table-foot" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-275">
                <table class="table">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td>Footer</td>
                      <td>Footer</td>
                      <td>Footer</td>
                      <td>Footer</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header"><strong>Tables</strong><span class="small ms-1">Captions</span></div>
        <div class="card-body">
          <p class="text-medium-emphasis small">A <code> &lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-305" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#captions" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-305">
                <table class="table">
                  <caption>List of users</caption>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <p class="text-medium-emphasis small">You can also put the <code> &lt;caption&gt;</code> on the top of the table with <code>.caption-top</code>.</p>
          <div class="example">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-617" role="tab">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                  </svg>Preview</a></li>
              <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#captions" target="_blank">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                  </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
              <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-617">
                <table class="table caption-top">
                  <caption>List of users</caption>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection