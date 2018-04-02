<form action="{!! $url !!}" method="POST">
  @csrf
  @method('delete')
  <input class="btn btn-danger btn-xs" type="submit" value="Delete">
</form>