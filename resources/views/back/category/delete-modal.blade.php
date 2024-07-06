@foreach ($categories as $item)
    <!-- Modal Delete-->
    <div class="modal fade" id="modalDelete{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dengar text-white">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Catagory</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ url('categories/' . $item->id) }}" method="post">
                        @method('DELETE')
                        @csrf

                        <div class="mb-3">
                            <p>Are You sure Want To Delete Category, name {{ $item->name }}, ..? </p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="Submit" class="btn btn-dengar">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
