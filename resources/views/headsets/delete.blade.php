<form action="{{ route('headsets.destroy', $headset->id) }}" method="POST" style="display: inline">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-outline-secondary">Delete</button>
</form>
