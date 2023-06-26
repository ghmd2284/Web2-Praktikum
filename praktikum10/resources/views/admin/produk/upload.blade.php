@extends('admin.layout.appadmin')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Unggah Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/photos/upload" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="photo">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="uploadForm" class="btn btn-primary">Unggah</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script Bootstrap dan jQuery -->
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
@endsection
