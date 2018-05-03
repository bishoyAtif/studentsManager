<form action="{!! $deleteUrl !!}" method="POST">
  @csrf
  @method('delete')
  <button type="submit" class="btn-danger"><i class="ti-close"></i> Delete</button>
</form>