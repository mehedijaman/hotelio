
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#" id="ViewBtn" data-id="{{ $id }}"><i class="fa fa-eye"></i> View</a>

    @if(Auth::user()->Role == 'SuperAdmin' || Auth::user()->Role == 'Admin')
    <a class="dropdown-item" href="#" id="EditBtn" data-id="{{ $id }}"><i class="fa fa-pencil"></i> Edit</a>
    @endif

    @if(Auth::user()->Role == 'SuperAdmin')
    <a class="dropdown-item" href="#" id="DeleteBtn" data-id="{{ $id }}"><i class="fa fa-trash"></i> Delete</a>
    @endif
  </div>
</div>

